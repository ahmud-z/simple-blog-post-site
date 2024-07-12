const btn = document.getElementById('formShowBtn');
const postContainer = document.getElementById('postContainer');

btn.addEventListener("click", function (event) {
    postContainer.classList.add("show");
    postContainer.classList.remove("hide");
    event.stopPropagation();  // Prevents the click event from bubbling up to the body
});

document.addEventListener("click", function (event) {
    if (!postContainer.contains(event.target) && event.target !== btn) {
        postContainer.classList.add("hide");
        postContainer.classList.remove("show");
    }
});


