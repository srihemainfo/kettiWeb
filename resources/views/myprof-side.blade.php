            <div class="col-lg-3 mb-4 bg-sec" id="sidebar">
                    <div class="green-bg" >
                        <div class="profile-main text-end">
                            <span class="btn-close" id="edit_closing_btn">X</span>
                        </div>
                        <div class="profile-secondary">
                            <div class="list-sec mt-4">
                                <ul>
                                     <li id="bg-profile" class="{{ request()->routeIs('bride-groom') ? 'active' : '' }}" onclick="window.location.href='{{ route('bride-groom') }}'" style="cursor: pointer;">
                                    <span class="icon"> <img src="images/after login/icon edit profile 1.webp"></span>
                                    <span class="description">Bride / Groom Profile</span>
                                </li>
                                
                                <li id="fam-det" class="{{ request()->routeIs('family-details') ? 'active' : '' }}" onclick="window.location.href='{{ route('family-details') }}'" style="cursor: pointer;">
                                    <span class="icon"> <img src="images/after login/icon edit profile 2.webp"></span>
                                    <span class="description">Family Details</span>
                                </li>
                                
                                <li id="add-det" class="{{ request()->routeIs('address-details') ? 'active' : '' }}" onclick="window.location.href='{{ route('address-details') }}'" style="cursor: pointer;">
                                    <span class="icon"> <img src="images/after login/icon edit profile 3.webp"></span>
                                    <span class="description">Address Details</span>
                                </li>

                               <!--<li id="add-det" class="{{ request()->routeIs('address-details') ? 'active' : '' }}" -->
                               <!--     onclick="window.location.href='{{ route('address-details') }}'" style="cursor: pointer;">-->
                               <!--     <span class="icon">-->
                               <!--         <img src="{{ asset('images/after login/icon edit profile 3.webp') }}" alt="Icon">-->
                               <!--     </span>-->
                               <!--     <span class="description">Address Details</span>-->
                               <!-- </li>-->
                                    <li id="par-prefer" class="{{ request()->routeIs('partner-preference') ? 'active' : '' }}" onclick="window.location.href='{{ route('partner-preference') }}'" style="cursor: pointer;">
                                        <span class="icon"> <img src="images/after login/icon edit profile 4.webp">
                                        </span>
                                        <span class="description">Partner Preference</span>
                                    </li>
                                    <li>
                                    </li>
                                         <li id="par-prefer" class="{{ request()->routeIs('horoscope-details') ? 'active' : '' }}" onclick="window.location.href='{{ route('horoscope-details') }}'" style="cursor: pointer;">

                                        <span class="icon"> <img src="images/after login/icon edit profile 5.webp">
                                        </span>
                                        <span class="description">Horoscope Details</span>
                                    </li>
                                   <li id="par-prefer" class="{{ request()->routeIs('hobbies-interest') ? 'active' : '' }}" onclick="window.location.href='{{ route('hobbies-interest') }}'" style="cursor: pointer;">
                                        <span class="icon"> <img src="images/after login/icon edit profile 6.webp">
                                        </span>
                                        <span class="description">Hobbies & Interest</span>
                                    </li>
                                        <li id="edu-detail" class="{{ request()->routeIs('education-occupation') ? 'active' : '' }}" onclick="window.location.href='{{ route('education-occupation') }}'" style="cursor: pointer;">

                                        <span class="icon"> <img src="images/after login/icon edit profile 7.webp">
                                        </span>
                                        <span class="description">Education & Occupation</span>
                                    </li>
                                    <li>
                                    </li>
                                        <li id="edu-detail" class="{{ request()->routeIs('habits') ? 'active' : '' }}" onclick="window.location.href='{{ route('habits') }}'" style="cursor: pointer;">

                                        <span class="icon"> <img src="images/after login/icon edit profile 8.webp">
                                        </span>
                                        <span class="description">Habits</span>
                                    </li>
                                <li id="loc-detail" class="{{ request()->routeIs('location-detail') ? 'active' : '' }}" onclick="window.location.href='{{ route('location-detail') }}'" style="cursor: pointer;">

                                        <span class="icon"> <img src="images/after login/icon edit profile 9.webp">
                                        </span>
                                        <span class="description">Location Details</span>
                                    </li>
                                    <li>
                                        <span class="icon"> <img src="images/after login/icon edit profile 9.webp">
                                        </span>
                                        <span class="description">Physical Attributes</span>
                                    </li>
                                    
                                    <li>
                                        <span class="icon"> <img src="images/after login/icon edit profile 9.webp">
                                        </span>
                                        <span class="description">For Intercaste Parents</span>
                                    </li>
                                    <li>
                                        <span class="icon"> <img src="images/after login/icon edit profile 9.webp">
                                        </span>
                                        <span class="description">Others</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
