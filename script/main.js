function myfun(event) {
    first = parseInt(event.target.parentElement.parentElement.children[0].textContent);
    console.log(first);
    document.querySelector("#exampleModal > div > div > div.modal-footer > button.btn.btn-danger").value = first;
};
