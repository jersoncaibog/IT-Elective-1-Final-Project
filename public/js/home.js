// signup ___________________________
const signupUsername = document.querySelector("#signup-username")
const signupPassword = document.querySelector("#signup-password")
const signupConfirmPassword = document.querySelector("#repeat-password")
const signupErrorPasswordMatch = document.querySelector("#password-not-match")
const signupErrorPasswordLength = document.querySelector("#password-too-short")
const signupErrorUsername = document.querySelector("#username-too-short")
const signupSubmitBtn = document.querySelector("#signup-submit")
const signupForm = document.querySelector("#signup-form")
const signupBtn = document.querySelector(".signup-btn")
const closeSignupBtn = document.querySelector(".close-btn")
const signupContainer = document.querySelector(".signup-container")
const backdrop = document.querySelector(".backdrop")
const urlParams = new URLSearchParams(window.location.search);

if (urlParams.get('error') === "23000") {
    signupContainer.style.display = "grid"
    signupUsername.value = urlParams.get('username')
    signupErrorUsername.textContent = "This username is already taken"
    signupErrorUsername.classList.add("error-show")
}

signupBtn.addEventListener("click", function(event) {
    event.preventDefault()

    signupContainer.style.display = "grid"
})

backdrop.addEventListener("click", function() {
    clearErrors()
    signupForm.reset()
    signupContainer.style.display = "none"
})

closeSignupBtn.addEventListener("click", function(event) {
    event.preventDefault()
    clearErrors()
    signupForm.reset()
    signupContainer.style.display = "none"
})

signupForm.addEventListener('keydown', () => {
    clearErrors()
})

// signup validation
signupForm.addEventListener('submit', (e) => {

    clearErrors()
    let isValid = true

    if (signupUsername.value.length < 5) {
        console.log(1)
        signupErrorUsername.textContent = "Username is too short (must be atleast 5 characters)"
        signupErrorUsername.classList.add("error-show")
        isValid = false
    }

    if (signupPassword.value !== signupConfirmPassword.value) {
        console.log(2)
        signupErrorPasswordMatch.classList.add("error-show")
        isValid = false
    }

    if (signupPassword.value.length < 5) {
        console.log(3)
        signupErrorPasswordLength.classList.add("error-show")
        isValid = false
    }

    if (isValid) {
        signupForm.submit()
        console.log("submit")
    } else {
        console.log("error")
        e.preventDefault()
    }
    
})

function clearErrors() {
    urlParams.delete('username')
    urlParams.delete('error')
    window.history.replaceState({}, '', `${window.location.pathname}`);
    signupErrorPasswordMatch.classList.remove("error-show")
    signupErrorPasswordLength.classList.remove("error-show")
    signupErrorUsername.classList.remove("error-show")
    errorSignin.classList.remove("error-show")
}

// signin validation
const signinUsername = document.querySelector("#signin-username")
const signinPassword = document.querySelector("#signin-password")
const signinForm = document.querySelector("#signin-form")
const errorSignin = document.querySelector("#error-signin")

const error = urlParams.get('error')

if (error) {
    switch (error) {
        case 'user_not_found':
            errorSignin.textContent = "Invalid username or password"
            break;
        default:
            errorSignin.textContent = "Something went wrong. Please try again."
    }

    errorSignin.classList.add("error-show")
}

signinForm.addEventListener("keydown", () => {
    clearErrors()
})


// qoutes
const quotes = [
    { quote: "The best way to predict the future is to invent it.", author: "Alan Kay" },
    { quote: "Success is not final, failure is not fatal: It is the courage to continue that counts.", author: "Winston Churchill" },
    { quote: "Don’t watch the clock do what it does. Keep going.", author: "Sam Levenson" },
    { quote: "Dream big, start small, but most of all, start.", author: "Simon Sinek" },
    { quote: "You don’t have to be great to start, but you have to start to be great.", author: "Zig Ziglar" },
    { quote: "Any fool can write code that a computer can understand. Good programmers write code that humans can understand.", author: "Martin Fowler" },
    { quote: "Programming isn’t about what you know it’s about what you can figure out.", author: "Chris Pine" },
    { quote: "Talk is cheap. Show me the code.", author: "Linus Torvalds" },
    { quote: "Code is like humor. When you have to explain it, it’s bad.", author: "Cory House" },
    { quote: "First, solve the problem. Then, write the code.", author: "John Johnson" },
    { quote: "If you can dream it, you can do it.", author: "Walt Disney" },
    { quote: "Don’t let yesterday take up too much of today.", author: "Will Rogers" },
    { quote: "Failure is the opportunity to begin again more intelligently.", author: "Henry Ford" },
    { quote: "The only way to do great work is to love what you do.", author: "Steve Jobs" },
    { quote: "Strive not to be a success, but rather to be of value.", author: "Albert Einstein" },
    { quote: "Life is 10% what happens to us and 90% how we react to it.", author: "Charles R. Swindoll" },
    { quote: "An unexamined life is not worth living.", author: "Socrates" },
    { quote: "The secret of getting ahead is getting started.", author: "Mark Twain" },
    { quote: "Whether you think you can or you think you can’t, you’re right.", author: "Henry Ford" },
    { quote: "Do what you can, with what you have, where you are.", author: "Theodore Roosevelt" },
    { quote: "Success usually comes to those who are too busy to be looking for it.", author: "Henry David Thoreau" },
    { quote: "The way to get started is to quit talking and begin doing.", author: "Walt Disney" },
    { quote: "You miss 100% of the shots you don’t take.", author: "Wayne Gretzky" },
    { quote: "Opportunities don’t happen. You create them.", author: "Chris Grosser" },
    { quote: "Don’t be afraid to give up the good to go for the great.", author: "John D. Rockefeller" },
    { quote: "It always seems impossible until it’s done.", author: "Nelson Mandela" },
    { quote: "Success is walking from failure to failure with no loss of enthusiasm.", author: "Winston Churchill" },
    { quote: "Hardships often prepare ordinary people for an extraordinary destiny.", author: "C.S. Lewis" },
    { quote: "Don’t count the days, make the days count.", author: "Muhammad Ali" },
    { quote: "Act as if what you do makes a difference. It does.", author: "William James" },
    { quote: "Quality is not an act, it is a habit.", author: "Aristotle" },
    { quote: "Well done is better than well said.", author: "Benjamin Franklin" },
    { quote: "Success is how high you bounce when you hit bottom.", author: "George S. Patton" },
    { quote: "It does not matter how slowly you go as long as you do not stop.", author: "Confucius" },
    { quote: "Do not wait to strike till the iron is hot, but make it hot by striking.", author: "William Butler Yeats" },
    { quote: "If opportunity doesn’t knock, build a door.", author: "Milton Berle" },
    { quote: "Don’t wait. The time will never be just right.", author: "Napoleon Hill" }
]

const num = parseInt(Math.random() * quotes.length)
document.querySelector(".quote").textContent = quotes[num].quote
document.querySelector(".author").textContent = "- " + quotes[num].author