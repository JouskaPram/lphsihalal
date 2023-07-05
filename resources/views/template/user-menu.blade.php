<div class="app-navbar-item ms-1 ms-md-3" id="kt_header_user_menu_toggle">
    <!--begin::Menu wrapper-->
    <div class="cursor-pointer symbol symbol-circle symbol-35px symbol-md-45px"
        data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-attach="parent"
        data-kt-menu-placement="bottom-end">
        <img src="https://i.pinimg.com/280x280_RS/55/96/4e/55964ebb02710d6b9ce1c26f1d857906.jpg" alt="" />
    </div>
    <!--begin::User account menu-->
    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg menu-state-color fw-semibold py-4 fs-6 w-275px"
        data-kt-menu="true">
        <!--begin::Menu item-->
        <div class="menu-item px-3">
            <div class="menu-content d-flex align-items-center px-3">
                <!--begin::Avatar-->
                <div class="symbol symbol-50px me-5">
                    <img alt="Logo" src="https://i.pinimg.com/280x280_RS/55/96/4e/55964ebb02710d6b9ce1c26f1d857906.jpg" />
                </div>
                <!--end::Avatar-->
                <!--begin::Username-->
                <div class="d-flex flex-column">
                    <div class="fw-bold d-flex align-items-center fs-5">Admin LPH
                        <span class="badge badge-light-success fw-bold fs-8 px-2 py-1 ms-2">Pro</span>
                    </div>
                    <a href="#" class="fw-semibold text-muted text-hover-primary fs-7">admin@mail.com</a>
                </div>
                <!--end::Username-->
            </div>
        </div>
        <!--end::Menu item-->
        <!--begin::Menu separator-->
        <div class="separator my-2"></div>
      
        <!--end::Menu item-->
        <!--begin::Menu item-->
        <div class="menu-item px-5">
        
           <button type="submit" class=" px-5 btn btn-primary btn-sm" onclick="signout()">
               Sign Out</button>
    
       
        </div>
        <!--end::Menu item-->
    </div>
    <!--end::User account menu-->
    <!--end::Menu wrapper-->
</div>
<script>
			function signout() {
				Swal.fire({
					title: "Apakah Anda yakin ingin keluar dari akun anda?",
					icon: "warning",
					buttonsStyling: false,
					showCancelButton: true,
					confirmButtonText: "Ya, Keluar!",
					cancelButtonText: 'Tidak, Batal!',
					customClass: {
						confirmButton: "btn btn-primary",
						cancelButton: 'btn btn-danger'
					}
				}).then((result) => {
					if (result.isConfirmed) {
						window.location="{{ route('auth.logout') }}"
					}
				});
			}
</script>
