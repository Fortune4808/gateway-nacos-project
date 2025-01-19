<nav class="fixed w-[230px] h-screen bg-white">
    <div class="mt-[70px]">
        <ul>
            <li class="side-links" onclick="_get_page('dashboard');"><i class="bi-speedometer2 text-[#3a4669] mr-[6px]"></i> Dashboard</li>
            <li class="side-links" id="admin-page" onclick="_get_page('all-staff');" title="Admin"><i class="bi-people text-[#3a4669] mr-[6px]"></i> Admin/Staff</li>

            <li class="side-links" onclick="_get_page('all-student');" title="Student Page"><i class="bi-people text-[#3a4669] mr-[6px]"></i> Student Page</li>

            <li class="side-links" onclick="_get_page('expenses-module');"><i class="bi-cash-coin text-[#3a4669] mr-[6px]"></i> Expenses Page</li>

            <li class="side-links" onclick="_expand_link('faculty');" title="Faculty/Department Page" id="faculty-department-page"><i class="bi-book text-[#3a4669] mr-[6px]"></i> Faculty/Department Page<i class="bi bi-chevron-down float-right mr-[15px]"></i>
                <div class="w-[100%] bg-[#f4f6fa]" id="faculty-li" style="display:none">   
                    <div class="li-in" onclick="_get_page('faculty-module');"> - View Faculty</div>
                    <div class="li-in" onclick="_get_page('department-module');"> - View Department</div>
                </div>
            </li>
                
            <li class="side-links" onclick="_expand_link('settings');"  title="Settings">  <i class="bi-gear text-[#3a4669] mr-[6px]"></i> Settings  <i class="bi bi-chevron-down float-right mr-[15px]"></i>
                <div class="w-[100%] bg-[#f4f6fa]" id="settings-li" style="display:none">   
                    <div class="li-in" id="system-settling" onClick="_get_form('system-setting')"> - System Settings</div>
                    <div class="li-in" onClick="_get_form('pass-form');"> - Change Password</div>
                </div>
            </li>

            <li class="side-links" onclick="_logout_();"><i class="bi-power text-[#3a4669] mr-[6px]"></i> Log-Out</li>
        </ul>
    </div>
</nav>

<script>
    if (role_id<=1){
        $('#admin-page').hide();
        $('#faculty-department-page').hide();
    }
</script>



