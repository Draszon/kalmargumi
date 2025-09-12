"user strict";

async function getComments() {
    try {
        const response = await fetch('/getcomments');
        if (!response.ok) throw new Error ('Hálózati hiba!');
        return await response.json();
    } catch (error) {
        console.log('Hiba a kommentek lekérdezése közben: ', error);
        return [];
    }
}

function renderComment(comment) {
    const content = document.getElementById("comment-content");
    const author = document.getElementById("comment-author");

    content.textContent = comment.comment;
    author.textContent = comment.author;
}

document.addEventListener("DOMContentLoaded", async() => {
    const commentField = document.querySelector(".aboutme-writer");

    if (commentField) {
        let currentIndex = 0;
        const comments = await getComments();

        renderComment(comments[currentIndex]);

        setInterval(() => {
            currentIndex++;
            if(currentIndex >= comments.length) {
                currentIndex = 0;
            }
            renderComment(comments[currentIndex]);
        }, 15000);
    }
});