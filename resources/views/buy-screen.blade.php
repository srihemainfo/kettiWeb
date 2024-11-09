<head>
    
 <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Bootstrap JS Bundle -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>    
    
</head>

<style>
    
.buy-credit-section {
    padding: 3rem 0;
    font-family: "Poppins", sans-serif;
}

.wallet-amount {
    background: linear-gradient(90deg, #00A859 0%, #8BC34A 100%);
    border-radius: 10px;
    width: max-content;
    padding: 10px 0 10px 20px;
    position: absolute;
    right: 10px;
}

.wallet-amount p {
    color: #fff;
    margin: 0;
    font-size: 1.3rem;
}

.wallet-amount p span {
    color: #2EBA72;
    padding: 11px;
    background: #fff;
    border-radius: 30px 10px 10px 30px;
    box-shadow: 0px 4px 4px 0px #00000040;
}

.buy-credit-details input {
    border: 1px solid black;
    width: 200px;
    text-align: center;
    background: #fff;
    padding: 8px;
    border-radius: 30px;
    font-size: 24px;
    margin-bottom: 1rem;
}

.buy-credit-details button {
    background: linear-gradient(180deg, #00A859 0%, #8BC34A 100%);
    color: white;
    font-size: 24px;
    border-radius: 30px;
    padding: 20px;
    line-height: 0;
    border: none;
    margin: 0 15px;
}

.buy-credit-details {
    border: 2px solid;
    border-image-source: linear-gradient(180deg, #00A859 0%, #8BC34A 100%);
    width: max-content;
    padding: 60px 30px;
    border-radius: 30px;
    -webkit-mask-image: linear-gradient(#fff 0 0);
    background: linear-gradient(white, white) padding-box, linear-gradient(180deg, #00A859 0%, #8BC34A 100%) border-box;
    text-align: center;
}

.buy-credit-main {
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    padding: 4rem 0;
}

.buy-credit {
    padding: 2rem 0;
    text-align: center;
}

.buy-pkg-name {
    font-weight: 500;
    font-size: 18px;
    background: linear-gradient(90deg, #CBA74F 0%, #FDF9A2 100%);
    display: inline-block;
    box-shadow: 0px 4px 4px 0px #00000040;
    border-radius: 5px;
    padding: 7px 14px;
    color: #000 !important;
    margin-bottom: 1rem;
}

.buy-credit-title {
    color:#737373;
    font-size:32px;
}

.buy-credit-details p {
    color:#666;
    font-size: 18px;
}

.credit-buy-btn {
    background: rgb(0, 168, 89);
    background: linear-gradient(90deg, rgba(0, 168, 89, 1) 0%, rgba(139, 195, 74, 1) 100%);
    padding: .8rem 1.8rem;
    font-weight: 500;
    border-bottom-left-radius: 15px;
    border-top-right-radius: 15px;
    color: #fff;
    font-size: 18px;
    text-decoration: none;
    letter-spacing: .2px;
    border:none;
    outline:none;
}

@media (max-width: 576px) {
    
    .buy-credit-details p {
        color: #666;
        font-size: 14px;
    }
    
    .buy-credit-details {
        padding: 60px 10px;
    }
    
    .buy-credit-details input {
        width: 100px;
        font-size: 12px;
    }
    
    .buy-credit-details button {
        font-size: 12px;
        padding: 15px;
    }
    
    .wallet-amount p {
        font-size: 1rem;
    }
    
    .buy-credit-title {
        font-size:22px;
    }
    
}
    
</style>

 @include('include.header2')
 

<section class="buy-credit-section">
    
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="green-bg">
                    <div class="profile-main">
                        <div class="user-details">
                            <div class="user-profile-pic">
                                <img src="images/after login/profile-main.webp" alt="profile-main"  data-bs-toggle="modal" data-bs-target="#profilePopup" style="cursor:pointer;">
                            </div>
                            <div class="user-profile-details">
                                <h1 class="user-name">T.Natarajan</h1>
                                <p class="user-id">km1044</p>
                                <p class="user-member">Membership : Free</p>
                                <button class="user-button">View Profile</button>
                            </div>
                        </div>
                    </div>
                    <div class="profile-secondary">
                        <div class="upgrade-sec text-center py-4">
                            <p>Become A Paid Member Now</p>
                            <a class="upgrade-btn" href="#">
                                Upgrade
                            </a>
                        </div>
                        <div class="list-sec">
                            <ul>
                                <li>
                                    <span class="icon"> <img src="images/after login/icon edit profile 1.webp">
                                    </span>
                                    <span class="description">Edit Profile</span>
                                </li>
                                <li>
                                    <span class="icon"> <img src="images/after login/icon edit profile 2.webp">
                                    </span>
                                    <span class="description">Edit Preference</span>
                                </li>
                                <li>
                                    <hr>
                                </li>
                                <li>
                                    <span class="icon"> <img src="images/after login/icon edit profile 3.webp">
                                    </span>
                                    <span class="description">Latest Profile</span>
                                </li>
                                <li>
                                    <span class="icon"> <img src="images/after login/icon edit profile 4.webp">
                                    </span>
                                    <span class="description">Preference List</span>
                                </li>
                                <li>
                                    <hr>
                                </li>
                                <li>
                                    <span class="icon"> <img src="images/after login/icon edit profile 5.webp">
                                    </span>
                                    <span class="description">Watch List</span>
                                </li>
                                <li>
                                    <span class="icon"> <img src="images/after login/icon edit profile 6.webp">
                                    </span>
                                    <span class="description">Prospect List</span>
                                </li>
                                <li>
                                    <span class="icon"> <img src="images/after login/icon edit profile 7.webp">
                                    </span>
                                    <span class="description">Blocked Profile</span>
                                </li>
                                <li>
                                    <hr>
                                </li>
                                <li>
                                    <span class="icon"> <img src="images/after login/icon edit profile 8.webp">
                                    </span>
                                    <span class="description">Settings</span>
                                </li>
                                <li>
                                    <span class="icon"> <img src="images/after login/icon edit profile 9.webp">
                                    </span>
                                    <span class="description">Help</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-8 position-relative">
                <div class="buy-credit">
                    <div class="wallet-amount">
                        <p>Wallet Amount <span>70</span></p>
                    </div>
                    <div class="buy-credit-main">
                        <div class="web-title">
                            <h3>Buy Credit</h3>
                        </div>
                        <div class="buy-credit-details">
                            <p class="buy-pkg-name">Gold Package</p>
                            <p>Quantity</p>
                            <button id="decrease">-</button><input id="quantity" value="1" type="number" disabled><button id="increase">+</button>
                            <p>Single Quantity Amount</p>
                            <input id="single-amount" value="70" type="number" disabled>
                            <p>Total Amount</p>
                            <input id="total-amount" value="70" type="number" disabled>
                        </div>
                    </div>
                    <input type="submit" value="Buy Now" class="credit-buy-btn">
                </div>
            </div>
        </div>
    </div>
    
</section>

<script>
    document.addEventListener('DOMContentLoaded', (event) => {
        const decreaseButton = document.getElementById('decrease');
        const increaseButton = document.getElementById('increase');
        const quantityInput = document.getElementById('quantity');
        const singleAmountInput = document.getElementById('single-amount');
        const totalAmountInput = document.getElementById('total-amount');

        const updateTotalAmount = () => {
            const quantity = parseInt(quantityInput.value);
            const singleAmount = parseFloat(singleAmountInput.value);
            totalAmountInput.value = quantity * singleAmount;
        };

        increaseButton.addEventListener('click', () => {
            quantityInput.value = parseInt(quantityInput.value) + 1;
            updateTotalAmount();
        });

        decreaseButton.addEventListener('click', () => {
            if (parseInt(quantityInput.value) > 1) {
                quantityInput.value = parseInt(quantityInput.value) - 1;
                updateTotalAmount();
            }
        });
    });
</script>

 @include('include.footer')
