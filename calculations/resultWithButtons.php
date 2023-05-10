<?session_start();
?>
<iframe src="result.php" width="100%" id="tableIframe" onload="resizeIframe(this)">Ваш браузер не поддерживает плавающие фреймы!</iframe>
<?
if($_SESSION['respon']['number_pages'] > 1) {
    ?>
    <div class="btnsPageSwitch d-flex justify-content-between w-100">
        <input type="button" value="<" id="btnPreviousPage" style="display: none;">
        <input type="button" value=">" id="btnNextPage">
    </div>
    <script src="/js/result/pageSwitch.js"></script>
    <?
}
?>
<script src="/js/result/resizeIframe.js"></script>