
function getBotResponse(input) {
    let inp=input.toLowerCase();


    // Simple responses
    if (inp == "hello") {
        return "Hello there!";
    } else if (input == "goodbye") {
        return "Talk to you later!";
    } else {
        return "please provide the mobile show that team will help you";
    }
}