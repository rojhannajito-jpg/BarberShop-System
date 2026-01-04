<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reserve your Chairs Now!!</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body class="bg-white">

    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card border-0 shadow-sm p-4">
                    <h2 class="text-center fw-bold mb-4"><span class="text-warning">Reserve</span> Your Chair</h2>
                    
                    <form id="reservationForm" action="save_reservation.php" method="POST">
                        <div class="mb-3">
                            <label class="form-label fw-bold">Full Name</label>
                            <input type="text" name="full_name" class="form-control" placeholder="Enter your name" required>
                        </div>
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label class="form-label fw-bold">Date</label>
                                <input type="date" name="res_date" id="resDate" class="form-control" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label fw-bold">Time</label>
                                <input type="time" name="res_time" id="resTime" class="form-control" required>
                            </div>
                        </div>

                        <div class="mb-4">
                            <label class="form-label fw-bold">Select Service</label>
                            <select class="form-select mb-2" id="serviceSelect" name="service_name">
                                <option value="Classic Haircut" data-price="100">Classic Haircut - ₱100.00</option>
                                <option value="Beard Trim" data-price="100">Beard Trim - ₱100.00</option>
                                <option value="Luxury Shave" data-price="100">Luxury Shave - ₱100.00</option>
                                <option value="Make-up Artistry" data-price="150">Make-up Artistry - ₱150.00</option>
                            </select>
                            <small class="text-muted">
                                Not sure? <a href="hairstyles.php" class="text-warning fw-bold">View Styles & Pictures</a>
                            </small>

                            <input type="hidden" name="selected_style" id="hiddenStyleInput" value="Standard">

                            <div id="selectedStyleDisplay" class="mt-3 p-2 bg-light rounded d-none border-start border-warning border-4">
                                <small class="text-muted d-block">Selected Style:</small>
                                <span id="styleName" class="fw-bold text-dark"></span>
                            </div>
                        </div>

                        <div class="bg-light p-3 rounded mb-4">
                            <h6 class="fw-bold border-bottom pb-2">Payment Summary</h6>
                            <div class="d-flex justify-content-between mt-2">
                                <span>Total Price:</span>
                                <span id="totalDisplay">₱100.00</span>
                            </div>
                            <div class="d-flex justify-content-between text-danger fw-bold">
                                <span>Downpayment (50%):</span>
                                <span id="downpaymentDisplay">₱50.00</span>
                            </div>
                        </div>

		<div class="mb-4">
                            <label class="form-label fw-bold">Payment Method</label>
                            <div class="form-check border p-2 rounded mb-2">
                                <input class="form-check-input ms-2" type="radio" name="payment" id="gcash" checked>
                                <label class="form-check-label ms-2" for="gcash">GCash / Online Wallet</label>
                            </div>
                        </div>

                        <button type="submit" id="submitBtn" class="btn btn-warning w-100 fw-bold py-3">CONFIRM & PAY ₱50.00</button>
                        
                        <div class="text-center mt-3">
                            <a href="index.php" class="text-muted small">Cancel and go back</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>
    window.onload = function() {
        // --- 1. Style Selection Logic ---
        const urlParams = new URLSearchParams(window.location.search);
        const chosenStyle = urlParams.get('style');
        if (chosenStyle) {
            const decodedStyle = decodeURIComponent(chosenStyle);
            document.getElementById('selectedStyleDisplay').classList.remove('d-none');
            document.getElementById('styleName').innerText = decodedStyle;
            document.getElementById('hiddenStyleInput').value = decodedStyle; // Sets the hidden database value
        }

        // --- 2. Dynamic Price Logic ---
        const serviceSelect = document.getElementById('serviceSelect');
        const totalDisplay = document.getElementById('totalDisplay');
        const downpaymentDisplay = document.getElementById('downpaymentDisplay');
        const submitBtn = document.getElementById('submitBtn');

        serviceSelect.addEventListener('change', function() {
            const price = this.options[this.selectedIndex].getAttribute('data-price');
            const downpayment = price / 2;
            
            totalDisplay.innerText = "₱" + price + ".00";
            downpaymentDisplay.innerText = "₱" + downpayment + ".00";
            submitBtn.innerText = "CONFIRM & PAY ₱" + downpayment + ".00";
        });

        // --- 3. Date and Time Protection ---
        const dateInput = document.getElementById('resDate');
        const timeInput = document.getElementById('resTime');
        const today = new Date().toISOString().split('T')[0];
        dateInput.setAttribute('min', today);

        document.getElementById('reservationForm').onsubmit = function(e) {
            const now = new Date();
            const selectedDateTime = new Date(dateInput.value + 'T' + timeInput.value);

            if (selectedDateTime < now) {
                e.preventDefault();
                alert("You cannot book a time in the past!");
                return false;
            }
            // Logic continues to save_reservation.php
        };
    }
</script>

</body>
<footer class="bg-white py-5 border-top">
    <div class="container text-center">
        <h2 class="navbar-brand mb-4" style="font-size: 2rem;">
            <span class="text-warning">Barber</span>Shop
        </h2>
        <p class="text-muted mb-2">Book your chair and skip the line!</p>
        <p class="text-secondary small">© 2026 BarberShop Reservation System.</p>
    </div>
</footer>
</html>