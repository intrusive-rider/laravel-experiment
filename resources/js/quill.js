const quill = new Quill("#editor", {
    modules: {
        toolbar: "#toolbar",
    },
});

quill.on("text-change", function () {
    document.getElementById("desc").value = quill.root.innerHTML;
});