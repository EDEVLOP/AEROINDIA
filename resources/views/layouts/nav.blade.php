<div class="sidebar-wrapper" data-simplebar="true">
            <div class="sidebar-header">
                <div>
                    <img src="assets/images/logo-icon.png" class="logo-icon" alt="logo icon">
                </div>
                <div>
                    <h4 class="logo-text">Aeroindia</h4>
                </div>
                <!-- <div class="toggle-icon ms-auto"><i class='bx bx-first-page'></i>
                </div> -->
            </div>
            <!--navigation-->
            <ul class="metismenu" id="menu">
                <li>
                    <a href="{{url('/home')}}" class="">
                        <div class="parent-icon"><i class='bx bx-home'></i>
                        </div>
                        <div class="menu-title">Dashboard</div>
                    </a>
                </li>
                <li>
					<a href="#" class="has-arrow">
						<div class="parent-icon"><i class='bx bx-spa' ></i>
						</div>
						<div class="menu-title">Setting</div>
					</a>
					<ul>
						<li> <a href="{{url('/addcountry')}}"><i class="bx bx-right-arrow-alt"></i>Country</a>
						</li>
                        <li> <a href="{{url('/addstate')}}"><i class="bx bx-right-arrow-alt"></i>State</a>
						</li>
                        <li> <a href="{{url('/addcity')}}"><i class="bx bx-right-arrow-alt"></i>City</a>
						</li>
					</ul>
				</li>
            </ul>
            <!--end navigation-->
        </div>