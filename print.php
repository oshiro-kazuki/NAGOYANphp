<?php
  // ライブラリの読み込み
  require_once('TCPDF/tcpdf.php');
  require_once('order.php');
  
  // TCPDFインスタンスを作成
  $orientation = 'Landscape'; // 用紙の向き
  $unit = 'mm'; // 単位
  $format = 'A4'; // 用紙フォーマット
  $unicode = true; // ドキュメントテキストがUnicodeの場合にTRUEとする
  $encoding = 'UTF-8'; // 文字コード
  $diskcache = false; // ディスクキャッシュを使うかどうか
  $tcpdf = new TCPDF($orientation, $unit, $format, $unicode, $encoding, $diskcache);
  
  // 印刷ヘッダーを表示しない
  $tcpdf->setPrintHeader(false);
  
  // 印刷フッターを表示しない
  $tcpdf->setPrintFooter(false);

  // 余白を設定する(左, 上, 右 の順で設定 / 単位はコンストラクタで設定したものに準拠)
$tcpdf->SetMargins(4, 4, 4);

// PDFファイルのタイトルを設定
$tcpdf->SetTitle('PDF Title');

// PDFファイルのサブタイトルを設定
$tcpdf->SetSubject('PDF Subject');

// PDFファイルの作成者を設定
$tcpdf->SetAuthor('PDF Author');

// 自動改ページをONにする
$margin = 5;
$tcpdf->SetAutoPageBreak(true, $margin);

// 日本語フォントを有効にする
$tcpdf->SetFont('kozminproregular', '', 10);

$fileName = 'sample.pdf';
$pdfData = $tcpdf->Output(rawurlencode($fileName), 'S');
 
// ブラウザにそのまま表示
header('Content-Type: application/pdf');
header("Content-Disposition: inline; filename*=UTF-8''".rawurlencode($fileName));
echo $pdfData;

// ダウンロードさせる
header('Content-Type: application/octet-stream', false);
header("Content-Disposition: attachment; filename*=UTF-8''".rawurlencode($fileName));
echo $pdfData;

$html = <<< EOM
 
<style>
    * {
        margin: 0;
        padding: 0;
    }
    th, td {
        white-space: nowrap;
        width: 40px;
    }
    table, th, td {
        border: solid 2px #000000;
    }
</style>

EOM;
?>
