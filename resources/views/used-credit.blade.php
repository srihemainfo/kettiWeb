<head>
    
 <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Bootstrap JS Bundle -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>    
    
</head>

<style>
    
.used-pin-section {
    padding: 2rem 0;
}

.my-new-table {
    border: 2px solid #00A859;
    border-collapse: separate;
    border-spacing: 0;
    border-radius: 10px;
    overflow: hidden;
    font-size: 14px;
}

.my-new-table th, .my-new-tabel td, .my-new-table tbody tr td {
    padding: 10px;
}

/*.my-new-table tr {*/
/*    border: 2px dotted #00A859;*/
/*}*/
    
</style>

 @include('include.header2')
 
<section class="used-pin-section">
    
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
            <div class="col-lg-8 my-3">
                <div class="web-title">
                    <h3>My Credit - Used</h3>
                </div>
                <div class="table-responsive">
                    <table class="my-new-table">
                        <thead>
                            <tr style="background: linear-gradient(180deg, #00A859 0%, #8BC34A 100%) border-box;color: #fff;text-align: center;">
                              <th scope="col" style="width:50px;">S No</th>
                              <th scope="col">PIN</th>
                              <th scope="col">Purchase Date</th>
                              <th scope="col">Used Date</th>
                              <th scope="col">User ID</th>
                              <th scope="col">User Name</th>
                              <th scope="col">User Mobile</th>
                              <th scope="col">View in English</th>
                              <th scope="col">View in Tamil</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <th scope="row">1</th>
                              <td>ADD3845849</td>
                              <td>02-03-2023</td>
                              <td>18-07-2023</td>
                              <td>KM0000</td>
                              <td>-</td>
                              <td>-</td>
                              <td>Click Here</td>
                              <td>Click Here</td>
                            </tr>
                            <tr>
                              <th scope="row">2</th>
                              <td>ADD3845849</td>
                              <td>02-03-2023</td>
                              <td>18-07-2023</td>
                              <td>KM0000</td>
                              <td>-</td>
                              <td>-</td>
                              <td>Click Here</td>
                              <td>Click Here</td>
                            </tr>
                            <tr>
                              <th scope="row">3</th>
                              <td>ADD3845849</td>
                              <td>02-03-2023</td>
                              <td>18-07-2023</td>
                              <td>KM0000</td>
                              <td>-</td>
                              <td>-</td>
                              <td>Click Here</td>
                              <td>Click Here</td>
                            </tr>
                          </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    
</section>

 @include('include.footer')
