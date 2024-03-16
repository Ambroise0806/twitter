document.addEventListener("DOMContentLoaded", function (event) {

// Emojis //
    EmojiButton(document.querySelector('#emojiButton'), function (emoji) {
      document.querySelector('input').value += emoji;
    });     
 
});
    // SELECT convo_users.* , convo.name, convo.picture FROM convo_users INNER JOIN convo ON convo.id = convo_users.id_convo INNER JOIN user ON user.id = convo_users.id_user;