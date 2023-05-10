function nextPage() {
    var iframe = document.getElementsByTagName('iframe')[0];
    var iframeDoc = iframe.contentWindow.document;

    let df = iframeDoc.getElementById('df');
    let df2 = iframeDoc.getElementById("df2");
    
    btnNextPage.style.display = "none";

    df.style.display = "none";

    
    btnPreviousPage.style.display = "";
    df2.style.display = "";
    
}

function previousPage() {
    var iframe = document.getElementsByTagName('iframe')[0];
    var iframeDoc = iframe.contentWindow.document;

    let df = iframeDoc.getElementById('df');
    let df2 = iframeDoc.getElementById("df2");

    btnPreviousPage.style.display = "none";
    df2.style.display = "none";
    btnNextPage.style.display = "";
    df.style.display = "";
}

let btnNextPage = document.getElementById('btnNextPage');
let btnPreviousPage = document.getElementById('btnPreviousPage');

btnNextPage.addEventListener('click', nextPage);
btnPreviousPage.addEventListener('click', previousPage);

