<link rel="stylesheet" href="bootstrap.min.css">
<link rel="stylesheet" href="enterprise.css">

<nav class="navbar-e">
    <span class="h4">Add New Contact</span>
</nav>

<div class="container mt-4" style="max-width:480px;">

    <!-- TAP SOUND -->
    <audio id="tapSound" src="https://assets.mixkit.co/sfx/download/mixkit-soft-button-click-1121.wav"></audio>

    <div class="keypad-container">

        <div id="phoneDisplay" class="phone-screen"></div>

        <div class="key-row">
            <button class="key-btn" onclick="press('1')">1</button>

            <button class="key-btn" onclick="press('2')">
                2 <div class='key-sub'>ABC</div>
            </button>

            <button class="key-btn" onclick="press('3')">
                3 <div class='key-sub'>DEF</div>
            </button>
        </div>

        <div class="key-row">
            <button class="key-btn" onclick="press('4')">
                4 <div class='key-sub'>GHI</div>
            </button>

            <button class="key-btn" onclick="press('5')">
                5 <div class='key-sub'>JKL</div>
            </button>

            <button class="key-btn" onclick="press('6')">
                6 <div class='key-sub'>MNO</div>
            </button>
        </div>

        <div class="key-row">
            <button class="key-btn" onclick="press('7')">
                7 <div class='key-sub'>PQRS</div>
            </button>

            <button class="key-btn" onclick="press('8')">
                8 <div class='key-sub'>TUV</div>
            </button>

            <button class="key-btn" onclick="press('9')">
                9 <div class='key-sub'>WXYZ</div>
            </button>
        </div>

        <div class="key-row">
            <button class="key-btn" onclick="backspace()">←</button>

            <button class="key-btn" onclick="press('0')">
                0
            </button>

            <button class="key-btn" onclick="clearNum()">C</button>
        </div>
    </div>

    <form class="contact-form mt-4" action="insert.php" method="POST">
        <input name="name" class="form-control mb-3" placeholder="Full Name" required>
        <input name="email" class="form-control mb-3" placeholder="Email" required>

        <input id="phoneInput" name="phone" class="form-control mb-3" placeholder="Phone" readonly required>

        <button class="btn-e w-100">Save Contact</button>
    </form>

</div>

<script>
// SOUND
function playSound(){
    document.getElementById('tapSound').play();
}

// VIBRATION
function vibrate(){
    if(navigator.vibrate){
        navigator.vibrate(40);
    }
}

// FORMAT 123-456-7890
function formatNumber(num){
    return num
    .replace(/\D/g, "")
    .replace(/(\d{3})(\d{3})(\d{1,4})/, "$1-$2-$3");
}

function press(n){
    playSound();
    vibrate();

    let display = document.getElementById('phoneDisplay');
    let input = document.getElementById('phoneInput');

    let raw = (input.value + n).replace(/\D/g, "");
    let formatted = formatNumber(raw);

    display.innerText = formatted;
    input.value = formatted;
}

function backspace(){
    let display = document.getElementById('phoneDisplay');
    let input = document.getElementById('phoneInput');

    let raw = input.value.replace(/\D/g, "").slice(0, -1);
    input.value = formatNumber(raw);
    display.innerText = input.value;
}

function clearNum(){
    document.getElementById('phoneDisplay').innerText = "";
    document.getElementById('phoneInput').value = "";
}
</script>
