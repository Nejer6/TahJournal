function addAmendment() {
    document.getElementById('meters').insertAdjacentHTML("beforeend", "<td><input name='meters[]' size='3' required></td>");
    document.getElementById("amendments").insertAdjacentHTML("beforeend", "<td><input name='amendments[]' size='3' required></td>");
}

function delAmendment() {
    let meters = document.getElementById("meters");
    if (meters.childElementCount > 1) {
        meters.lastElementChild.remove();
        document.getElementById("amendments").lastElementChild.remove();    
    }
}

document.getElementById("addAmendment").addEventListener("click", addAmendment)
document.getElementById("delAmendment").addEventListener("click", delAmendment)