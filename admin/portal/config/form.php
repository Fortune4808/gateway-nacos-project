<?php if ($page=='staff_reg'){?>
    <div class="absolute h-screen w-[500px] bg-white right-0 animated fadeInRight">
        <div class="formHeader">
            <p class="text-white text-[13px] font-semibold font-title"><i class="bi-person-plus"></i> New Staff/Admin Registration Form </p>
            <div class="bg-white bg-opacity-80 px-[8px] py-[3px] rounded-[100%] text-[#f00] text-[18px] cursor-pointer" title="close" onclick="alert_close()"><i class="bi-x"></i></div>
        </div>

        <div class="w-[100%] h-[calc(100%-50px)] absolute overflow-auto">

            <div class="w-[90%] m-auto">
                <div class="mt-[15px] p-[10px] bg-[#FAF3F0] border border-solid border-[#F2BDA2] font-title">
                    <p class="text-[#424141]">Kindly fill the form below to <span class="text-[#83C2E7] font-bold">Add New Staff/Admin</span></p>
                </div>

                <div class="my-[20px] text-[12px] flex flex-col gap-[5px]">
                    <div class="w-[100%]">
                        <label class="px-[10px] text-primary-color"> FULLNAME:</label><br/>
                        <input class="formInput" type="text" id="fullname" placeholder="ENTER FULLNAME"/>
                    </div>
            
                    <div class="w-[100%]">
                        <label class="px-[10px] text-primary-color"> PHONE NUMBER:</label><br/>
                        <input class="formInput" type="tel" id="phoneno" placeholder="ENTER PHONE NUMBER"/>
                    </div>

                    <div class="w-[100%]">
                        <label class="px-[10px] text-primary-color"> EMAIL ADDRESS:</label><br/>
                        <input class="formInput" type="email" id="email" placeholder="ENTER EMAIL ADDRESS"/>
                    </div>

                    <div class="w-[100%]">
                        <label class="px-[10px] text-primary-color"> FACULTY:</label><br/>
                        <select class="formInput" id="faculty_id">
                            <option>Select Faculty</option>
                            <script>_get_faculty();</script>
                        </select>
                    </div>

                    <div class="w-[100%]">
                        <label class="px-[10px] text-primary-color"> DEPARTMENT:</label><br/>
                        <select class="formInput" id="department_id">
                            <option>Select Department</option>
                            <script>
                                $('#faculty_id').on('change', function() {
                                var faculty_id = $(this).val(); 
                                 _get_department(faculty_id); 
                                });
                            </script>
                        </select>
                    </div>

                    <div class="w-[100%]">
                        <label class="px-[10px] text-primary-color"> STAFF POST:</label><br/>
                        <select class="formInput" id="post_id">
                            <option>Select Post</option>
                            <script>_get_post();</script>
                        </select>
                    </div>

                    <div class="w-[100%]">
                        <label class="px-[10px] text-primary-color"> STAFF ROLE:</label><br/>
                        <select class="formInput" id="role_id">
                            <option>Select Role</option>
                            <script>_get_role();</script>
                        </select>
                    </div>

                    <div class="w-[100%]">
                        <label class="px-[10px] text-primary-color"> STATUS:</label><br/>
                        <select class="formInput" id="status_id">
                            <option>Select Status</option>
                            <script>_get_status();</script>
                        </select>
                    </div>

                    <button class="w-[40%]" title="submit" id="submit_btn" onclick="_add_new_staff()"><i class="bi-check2"></i> SUBMIT</button>
                </div>
            </div>
        </div>
    </div>
<?php }?>

<?php if($page=='my-profile-module'){?>
    <div class="absolute h-screen w-[90%] right-[5%] top-[55px] bg-white animated fadeInUp">
        <div class="formHeader">
            <p class="text-white text-[13px] font-bold"><i class="bi-person-fill"></i> ADMINISTRATOR'S PROFILE</p>
            <div class="bg-white bg-opacity-80 px-[8px] py-[3px] rounded-[100%] text-[#f00] text-[18px] cursor-pointer" title="close" onclick="alert_close()"><i class="bi-x"></i></div>
        </div>

        <div class="w-[100%] h-[calc(100%-50px)] absolute overflow-auto">
            <div class="w-[100%] h-[150px] bg-profile-background bg-cover"></div>
            <div class="w-[90%] m-auto mt-[-50px]">
                <label>
                    <div class="w-[100px] h-[100px] border-[2px] border-white float-left rounded-[7px]" >
                        <img class="w-full h-full object-cover rounded-[5px]" alt="Profile Picture" title="Profile Picture" id="pictureBox2" style="width: 100px; height: 100px; object-position: top;"/>
                        <input type="file" id="profile_pix" style="display:none" accept=".jpg, .jpeg, .png, .gif, .bmp, .tiff, .webp, .svg, .avif" onchange="Upload.UpdatePreview(this);"/>
                    </div>
                </label>

                <div class="w-[calc(100%-110px)] float-right text-[#999] font-title">
                    <p class="text-[25px] text-white font-bold" id="login_staff_profile">xxxx</p>
                    <p class="text-[11px] p-[20px] pl-[0px] font-body">STATUS: <strong id="login_status_name">XXXX</strong> | LAST LOGIN DATE: <strong id="login_staff_last_login">xxxx</strong></p>
                </div>
            </div>

            <div class="w-[90%] m-auto mt-[150px] mb-[150px] pb-[50px]">
                <div class="text-[14px] font-bold text-primary-color pl-[10px] pb-[15px] border-b border-primary-color">BASIC INFORMATION</div>

                <div class="mt-[10px] text-[12px] flex gap-[5px]">
                    <div class="w-[100%]">
                        <label class="px-[15px] text-gray-500"> SURNAME:</label><br/>
                        <input class="formInput" type="text" id="surname" placeholder="SURNAME"/>
                    </div>

                    <div class="w-[100%]">
                        <label class="px-[15px] text-gray-500"> OTHER NAMES:</label><br/>
                        <input class="formInput" type="text" id="othernames" placeholder="OTHER NAMES"/>
                    </div>
                </div>

                <div class="mt-[10px] text-[12px] flex gap-[5px]">
                     <div class="w-[100%]">
                        <label class="px-[15px] text-gray-500"> DATE OF BIRTH:</label><br/>
                        <input class="formInput" type="date" id="dob"/>
                    </div>

                    <div class="w-[100%]">
                        <label class="px-[15px] text-gray-500"> GENDER:</label><br/>
                        <select class="formInput" id="gender_id">
                           <script>_get_gender();</script>
                        </select>
                    </div>

                    <div class="w-[100%]">
                        <label class="px-[15px] text-gray-500"> RELIGION AFFILIATION</label><br/>
                        <select class="formInput">
                           
                        </select>
                    </div>
                </div>

                <div class="text-[14px] font-bold text-primary-color pl-[10px] pb-[15px] mt-[50px] border-b border-primary-color">CONTACT INFORMATION</div>

                <div class="mt-[10px] text-[12px] flex gap-[5px]">
                    <div class="w-[100%]">
                        <label class="px-[15px] text-gray-500"> EMAIL ADDRESS:</label><br/>
                        <input class="formInput" type="email" id="email_address" placeholder="EMAIL ADDRESS"/>
                    </div>

                    <div class="w-[100%]">
                        <label class="px-[15px] text-gray-500"> PHONE NUMBER:</label><br/>
                        <input class="formInput" type="tel" id="phoneno" placeholder="PHONE NUMBER"/>
                    </div>
                </div>

                <div class="text-[14px] font-bold text-primary-color pl-[10px] pb-[15px] mt-[50px] border-b border-primary-color">ACCOUNT INFORMATION</div>
                
                <div class="mt-[10px] text-[12px] flex gap-[5px]">
                    <div class="w-[100%]">
                        <label class="px-[15px] text-gray-500"> STAFF ID:</label><br/>
                        <div class="relative flex items-center">
                            <input class="formInput" type="text" readonly="readonly" id="staff_id" placeholder="STAFF ID"/>
                            <i class="bi-lock-fill absolute right-3 text-primary-color"></i>
                        </div>
                    </div>

                    <div class="w-[100%]">
                        <label class="px-[15px] text-gray-500"> POST:</label><br/>
                        <div class="relative flex items-center">
                            <input class="formInput" type="text" readonly="readonly" id="post" placeholder="POST"/>
                            <i class="bi-lock-fill absolute right-3 text-primary-color"></i>
                        </div>
                    </div>
                </div>
                <div class="mt-[10px] text-[12px] flex gap-[5px]">
                    <div class="w-[100%]">
                        <label class="px-[15px] text-gray-500"> FACULTY:</label><br/>
                        <div class="relative flex items-center">
                            <input class="formInput" type="text" readonly="readonly" id="faculty_id" placeholder="FACULTY"/>
                            <i class="bi-lock-fill absolute right-3 text-primary-color"></i>
                        </div>
                    </div>

                    <div class="w-[100%]">
                        <label class="px-[15px] text-gray-500"> DEPARTMENT:</label><br/>
                        <div class="relative flex items-center">
                            <input class="formInput" type="text" readonly="readonly" id="department_id" placeholder="DEPARTMENT"/>
                            <i class="bi-lock-fill absolute right-3 text-primary-color"></i>
                        </div>
                    </div>
                </div>
                <div class="mt-[10px] text-[12px] flex gap-[5px]">
                    <div class="w-[100%]">
                        <label class="px-[15px] text-gray-500"> DATE OF REGISTRATION:</label><br/>
                        <div class="relative flex items-center">
                            <input class="formInput" type="text" readonly="readonly" id="r_date" placeholder="DATE OF REGISTRATION"/>
                            <i class="bi-lock-fill absolute right-3 text-primary-color"></i>
                        </div>
                    </div>

                    <div class="w-[100%]">
                        <label class="px-[15px] text-gray-500"> LAST LOGIN DATE:</label><br/>
                        <div class="relative flex items-center">
                            <input class="formInput" type="text" readonly="readonly" id="last_login_date" placeholder="LAST LOGIN DATE"/>
                            <i class="bi-lock-fill absolute right-3 text-primary-color"></i>
                        </div>
                    </div>
                </div>

                <div class="text-[14px] font-bold text-primary-color pl-[10px] pb-[15px] mt-[50px] border-b border-primary-color">ADMINISTRATIVE INFORMATION</div>

                <div class="mt-[10px] text-[12px] flex gap-[5px]">
                    <div class="w-[100%]">
                        <label class="px-[15px] text-gray-500"> USER ROLE:</label><br/>
                        <div class="relative flex items-center">
                            <input class="formInput" type="text" readonly="readonly" id="role" placeholder="USER ROLE"/>
                            <input type="hidden" id="role_id" />
                            <i class="bi-lock-fill absolute right-3 text-primary-color"></i>
                        </div>
                    </div>

                    <div class="w-[100%]">
                        <label class="px-[15px] text-gray-500"> USER STATUS:</label><br/>
                        <div class="relative flex items-center">
                            <input class="formInput" type="text" readonly="readonly" id="status" placeholder="USER STATUS"/>
                            <input type="hidden" id="status_id" />
                            <i class="bi-lock-fill absolute right-3 text-primary-color"></i>
                        </div>
                    </div>
                </div>
                <button class="w-[15%] float-right mt-[20px]" id="submit_btn" title="" onclick="_update_staff_data(staff_id)">UPDATE PROFILE <i class="bi-check2"></i></button>
            </div>
        </div>
        <script>_get_staff_login(staff_id);</script>
        <script>upload_pix();</script>
    </div>
<?php }?>


<?php if($page=='staff-profile-module'){?>
    <div class="absolute h-screen w-[90%] right-[5%] top-[55px] bg-white animated fadeInUp">
        <div class="formHeader">
            <p class="text-white text-[13px] font-bold"><i class="bi-person-fill"></i> ADMINISTRATOR'S PROFILE</p>
            <div class="bg-white bg-opacity-80 px-[8px] py-[3px] rounded-[100%] text-[#f00] text-[18px] cursor-pointer" title="close" onclick="alert_close()"><i class="bi-x"></i></div>
        </div>

        <div class="w-[100%] h-[calc(100%-50px)] absolute overflow-auto">
            <div class="w-[100%] h-[150px] bg-profile-background bg-cover"></div>
            <div class="w-[90%] m-auto mt-[-50px]">
                <label>
                    <div class="w-[100px] h-[100px] border-[2px] border-white float-left rounded-[7px]" >
                        <img class="w-full h-full object-cover rounded-[5px]" alt="Profile Picture" title="Profile Picture" id="staff_passport" style="width: 100px; height: 100px; object-position: top;"/>
                        <input type="file" id="profile_pix" style="display:none" accept=".jpg, .jpeg, .png, .gif, .bmp, .tiff, .webp, .svg, .avif" onchange="Upload.UpdatePreview(this);"/>
                    </div>
                </label>

                <div class="w-[calc(100%-110px)] float-right text-[#999] font-title">
                    <p class="text-[25px] text-white font-bold" id="staff_profile">xxxx</p>
                    <p class="text-[11px] p-[20px] pl-[0px] font-body">STATUS: <strong id="status_name">XXXX</strong> | LAST LOGIN DATE: <strong id="last_login">xxxx</strong></p>
                </div>
            </div>

            <div class="w-[90%] m-auto mt-[150px] mb-[150px] pb-[50px]">
                <div class="text-[14px] font-bold text-primary-color pl-[10px] pb-[15px] border-b border-primary-color">BASIC INFORMATION</div>

                <div class="mt-[10px] text-[12px] flex gap-[5px]">
                    <div class="w-[100%]">
                        <label class="px-[15px] text-gray-500"> SURNAME:</label><br/>
                        <input class="formInput" type="text" id="surname" placeholder="SURNAME"/>
                    </div>

                    <div class="w-[100%]">
                        <label class="px-[15px] text-gray-500"> OTHER NAMES:</label><br/>
                        <input class="formInput" type="text" id="othernames" placeholder="OTHER NAMES"/>
                    </div>
                </div>

                <div class="mt-[10px] text-[12px] flex gap-[5px]">
                    <div class="w-[100%]">
                        <label class="px-[15px] text-gray-500"> DATE OF BIRTH:</label><br/>
                        <input class="formInput" type="date" id="dob"/>
                    </div>

                    <div class="w-[100%]">
                        <label class="px-[15px] text-gray-500"> GENDER:</label><br/>
                        <select class="formInput" id="gender_id">
                           <script>_get_gender();</script>
                        </select>
                    </div>

                    <div class="w-[100%]">
                        <label class="px-[15px] text-gray-500"> RELIGION AFFILIATION</label><br/>
                        <select class="formInput">
                            <option value=""></option>
                            <option value="">CHRISTIANITY</option>
                            <option value="">ISLAMIC</option>
                            <option value="">OTHERS</option>
                        </select>
                    </div>
                </div>

                <div class="text-[14px] font-bold text-primary-color pl-[10px] pb-[15px] mt-[50px] border-b border-primary-color">CONTACT INFORMATION</div>

                <div class="mt-[10px] text-[12px] flex gap-[5px]">
                    <div class="w-[100%]">
                        <label class="px-[15px] text-gray-500"> EMAIL ADDRESS:</label><br/>
                        <input class="formInput" type="email" id="email_address" placeholder="EMAIL ADDRESS"/>
                    </div>

                    <div class="w-[100%]">
                        <label class="px-[15px] text-gray-500"> PHONE NUMBER:</label><br/>
                        <input class="formInput" type="tel" id="phoneno" placeholder="PHONE NUMBER"/>
                    </div>
                </div>

                <div class="text-[14px] font-bold text-primary-color pl-[10px] pb-[15px] mt-[50px] border-b border-primary-color">ACCOUNT INFORMATION</div>
                
                <div class="mt-[10px] text-[12px] flex gap-[5px]">
                    <div class="w-[100%]">
                        <label class="px-[15px] text-gray-500"> STAFF ID:</label><br/>
                        <div class="relative flex items-center">
                            <input class="formInput" type="text" readonly="readonly" id="staff_id" placeholder="STAFF ID"/>
                            <i class="bi-lock-fill absolute right-3 text-primary-color"></i>
                        </div>
                    </div>

                    <div class="w-[100%]">
                        <label class="px-[15px] text-gray-500"> POST:</label><br/>
                        <select class="formInput" id="post_id">
                          <script>_get_post();</script>
                        </select>
                    </div>
                </div>

                <div class="mt-[10px] text-[12px] flex gap-[5px]">
                    <div class="w-[100%]">
                        <label class="px-[15px] text-gray-500"> FACULTY:</label><br/>
                        <select class="formInput" id="faculty_id">
                          <script>_get_faculty();</script>
                        </select>
                    </div>

                    <div class="w-[100%]">
                        <label class="px-[15px] text-gray-500"> DEPARTMENT:</label><br/>
                        <select class="formInput" id="department_id">
                            <script>
                                  $('#faculty_id').on('change', function() {
                                var faculty_id = $(this).val(); 
                                 _get_department(faculty_id); 
                                });
                            </script>
                        </select>
                    </div>
                </div>
                <div class="mt-[10px] text-[12px] flex gap-[5px]">
                    <div class="w-[100%]">
                        <label class="px-[15px] text-gray-500"> DATE OF REGISTRATION:</label><br/>
                        <div class="relative flex items-center">
                            <input class="formInput" type="text" readonly="readonly" id="r_date" placeholder="DATE OF REGISTRATION"/>
                            <i class="bi-lock-fill absolute right-3 text-primary-color"></i>
                        </div>
                    </div>

                    <div class="w-[100%]">
                        <label class="px-[15px] text-gray-500"> LAST LOGIN DATE:</label><br/>
                        <div class="relative flex items-center">
                            <input class="formInput" type="text" readonly="readonly" id="last_login_date" placeholder="LAST LOGIN DATE"/>
                            <i class="bi-lock-fill absolute right-3 text-primary-color"></i>
                        </div>
                    </div>
                </div>

                <div class="text-[14px] font-bold text-primary-color pl-[10px] pb-[15px] mt-[50px] border-b border-primary-color">REGISTERED INFORMATION</div>
                
                <div class="mt-[10px] text-[12px] flex gap-[5px]">
                    <div class="w-[100%]">
                        <label class="px-[15px] text-gray-500"> STAFF ID:</label><br/>
                        <div class="relative flex items-center">
                            <input class="formInput" type="text" readonly="readonly" id="r_staff_id" placeholder="STAFF ID"/>
                            <i class="bi-lock-fill absolute right-3 text-primary-color"></i>
                        </div>
                    </div>

                    <div class="w-[100%]">
                        <label class="px-[15px] text-gray-500"> FULLNAME:</label><br/>
                        <div class="relative flex items-center">
                            <input class="formInput" type="text" readonly="readonly" id="r_fullname" placeholder="FULLNAME"/>
                            <i class="bi-lock-fill absolute right-3 text-primary-color"></i>
                        </div>
                    </div>
                </div>


                <div class="text-[14px] font-bold text-primary-color pl-[10px] pb-[15px] mt-[50px] border-b border-primary-color">ADMINISTRATIVE INFORMATION</div>

                <div class="mt-[10px] text-[12px] flex gap-[5px]">
                    <div class="w-[100%]">
                        <label class="px-[15px] text-gray-500"> USER ROLE:</label><br/>
                        <select class="formInput" id="role_id">
                            <script>_get_role();</script>
                        </select>
                    </div>

                    <div class="w-[100%]">
                        <label class="px-[15px] text-gray-500"> USER STATUS:</label><br/>
                        <select class="formInput" id="status_id">
                            <script>_get_status();</script>
                        </select>
                    </div>
                </div>
                <button class="w-[15%] float-right mt-[20px]" id="submit_btn" title="" onclick="_update_staff_data('<?php echo $ids?>')">UPDATE PROFILE <i class="bi-check2"></i></button>
            </div>
        </div>
        <script>_get_staff_profile('<?php echo $ids?>');</script>
    </div>
<?php }?>


<?php if ($page=='pass-form'){?>
    <div class="absolute h-screen w-[500px] bg-white right-0 animated fadeInRight">
        <div class="formHeader">
            <p class="text-white text-[13px] font-semibold font-title"><i class="bi-lock"></i> Change Password Form </p>
            <div class="bg-white bg-opacity-80 px-[8px] py-[3px] rounded-[100%] text-[#f00] text-[18px] cursor-pointer" title="close" onclick="alert_close()"><i class="bi-x"></i></div>
        </div>

        <div class="w-[100%] h-[calc(100%-50px)] absolute overflow-auto">

            <div class="w-[90%] m-auto">
                <div class="mt-[15px] p-[10px] bg-[#FAF3F0] border border-solid border-[#F2BDA2] font-title">
                    <p class="text-[#424141]">Enter the <span class="text-[#46A0DD] font-bold">OLD PASSWORD</span> and create your <span class="text-[#46A0DD] font-bold">NEW PASSWORD</span></p>
                </div>

                <div class="my-[20px] text-[12px] flex flex-col gap-[5px]">
                    <div class="w-[100%]">
                        <label class="px-[10px] text-primary-color"> OLD PASSWORD:</label><br/>
                        <input class="formInput" type="password" id="old_pass" placeholder="ENTER OLD PASSWORD"/>
                    </div>
            
                    <div class="w-[100%]">
                        <label class="px-[10px] text-primary-color"> NEW PASSWORD:</label><br/>
                        <input class="formInput" type="password" id="new_pass" placeholder="CREATE NEW PASSWORD"/>
                    </div>

                    <div class="w-[100%]">
                        <label class="px-[10px] text-primary-color"> CONFIRM NEW PASSWORD:</label><br/>
                        <input class="formInput" type="password" id="confirm_pass" placeholder="CONFIRM NEW PASSWORD"/>
                    </div>

                    <button class="w-[40%]" title="submit" id="submit_btn" onclick="_change_pass(staff_id);"><i class="bi-arrow-repeat"></i> SUBMIT</button>
                </div>
            </div>
        </div>
    </div>
<?php }?>

<?php if ($page=='department_course'){?>
    <div class="absolute h-screen w-[500px] bg-white right-0 animated fadeInRight">
        <div class="formHeader">
            <p class="text-white text-[13px] font-semibold font-title"><i class="bi-book-fill"></i> Add New Department Course Form</p>
            <div class="bg-white bg-opacity-80 px-[8px] py-[3px] rounded-[100%] text-[#f00] text-[18px] cursor-pointer" title="close" onclick="alert_close()"><i class="bi-x"></i></div>
        </div>

        <div class="w-[100%] h-[calc(100%-50px)] absolute overflow-auto">

            <div class="w-[90%] m-auto">
                <div class="mt-[15px] p-[10px] bg-[#FAF3F0] border border-solid border-[#F2BDA2] font-title">
                    <p class="text-[#424141]">Kindly fill the form below to <span class="text-[#83C2E7] font-bold">Add New Department Course</span></p>
                </div>

                <div class="my-[20px] text-[12px] flex flex-col gap-[5px]">

                    <div class="w-[100%]">
                        <label class="px-[10px] text-primary-color"> FACULTY:</label><br/>
                        <select class="formInput" id="faculty_id">
                            <option>Select Faculty</option>
                            <script>_get_faculty();</script>
                        </select>
                    </div>

                    <div class="w-[100%]">
                        <label class="px-[10px] text-primary-color"> DEPARTMENT:</label><br/>
                        <select class="formInput" id="department_id">
                            <option>Select Department</option>
                            <script>
                                $('#faculty_id').on('change', function() {
                                var faculty_id = $(this).val(); 
                                 _get_department(faculty_id); 
                                });
                            </script>
                        </select>
                    </div>

                    <div class="w-[100%]">
                        <label class="px-[10px] text-primary-color"> COURSE:</label><br/>
                        <select class="formInput" id="course_id">
                            <script>_get_course();</script>
                        </select>
                    </div>

                    <button class="w-[40%]" title="submit" id="submit_btn" onclick="_add_new_department_course()"><i class="bi-check2"></i> SUBMIT</button>
                </div>
            </div>
        </div>
    </div>
<?php }?>

<?php if ($page=='new-expenses'){?>
    <div class="absolute h-screen w-[500px] bg-white right-0 animated fadeInRight">
        <div class="formHeader">
            <p class="text-white text-[13px] font-semibold font-title"><i class="bi-cash-coin"></i> New Expenses Form </p>
            <div class="bg-white bg-opacity-80 px-[8px] py-[3px] rounded-[100%] text-[#f00] text-[18px] cursor-pointer" title="close" onclick="alert_close()"><i class="bi-x"></i></div>
        </div>

        <div class="w-[100%] h-[calc(100%-50px)] absolute overflow-auto">

            <div class="w-[90%] m-auto">
                <div class="mt-[15px] p-[10px] bg-[#FAF3F0] border border-solid border-[#F2BDA2] font-title">
                    <p class="text-[#424141]">Kindly fill the form below to <span class="text-[#83C2E7] font-bold">Add New Expenses</span></p>
                </div>

                <div class="my-[20px] text-[12px] flex flex-col gap-[5px]">
                    <div class="w-[100%]">
                        <label class="px-[10px] text-primary-color"> EXPENSES DESCRIPTION:</label><br/>
                        <input class="formInput" type="text" id="expenses_desc" placeholder="ENTER EXPENSES DESCRIPTION"/>
                    </div>
            
                    <div class="w-[100%]">
                        <label class="px-[10px] text-primary-color"> EXPENSES ITEM:</label><br/>
                        <input class="formInput" type="tel" id="expenses_item" placeholder="ENTER EXPENSES ITEM"/>
                    </div>

                    <div class="w-[100%]">
                        <label class="px-[10px] text-primary-color"> EXPENSES AMOUNT:</label><br/>
                        <input class="formInput" type="email" id="expenses_amount" placeholder="ENTER EXPENSES AMOUNT"/>
                    </div>

                    <button class="w-[40%]" title="submit" id="submit_btn" onclick="_add_new_expenses();"><i class="bi-check2"></i> SUBMIT</button>
                </div>
            </div>
        </div>
    </div>
<?php }?>

<?php if ($page=='update-expenses'){?>
    <div class="absolute h-screen w-[500px] bg-white right-0 animated fadeInRight">
        <div class="formHeader">
            <p class="text-white text-[13px] font-semibold font-title"><i class="bi-cash-coin"></i> Update Expenses Form </p>
            <div class="bg-white bg-opacity-80 px-[8px] py-[3px] rounded-[100%] text-[#f00] text-[18px] cursor-pointer" title="close" onclick="alert_close()"><i class="bi-x"></i></div>
        </div>

        <div class="w-[100%] h-[calc(100%-50px)] absolute overflow-auto">

            <div class="w-[90%] m-auto">

                <div class="my-[20px] text-[12px] flex flex-col gap-[5px]">
                    <div class="w-[100%]">
                        <label class="px-[10px] text-primary-color"> EXPENSES DESCRIPTION:</label><br/>
                        <input class="formInput" type="text" id="expenses_description" placeholder="ENTER EXPENSES DESCRIPTION"/>
                    </div>
            
                    <div class="w-[100%]">
                        <label class="px-[10px] text-primary-color"> EXPENSES ITEM:</label><br/>
                        <input class="formInput" type="tel" id="expenses_item" placeholder="ENTER EXPENSES ITEM"/>
                    </div>

                    <div class="w-[100%]">
                        <label class="px-[10px] text-primary-color"> EXPENSES AMOUNT:</label><br/>
                        <input class="formInput" type="email" id="expenses_amount" placeholder="ENTER EXPENSES AMOUNT"/>
                    </div>

                    <button class="w-[40%]" title="submit" id="submit_btn" onclick="updateExpenses('<?php echo $ids?>');"><i class="bi-check2"></i> UPDATE</button>
                </div>
            </div>
        </div>
        <script>fetchEachExpenses('<?php echo $ids; ?>')</script>
    </div>
<?php }?>

<?php if ($page=='system-setting'){?>
    <div class="absolute h-screen w-[500px] bg-white right-0 animated fadeInRight">
        <div class="formHeader">
            <p class="text-white text-[13px] font-semibold font-title"><i class="bi-pc-display"></i> SYSTEM SETTINGS </p>
            <div class="bg-white bg-opacity-80 px-[8px] py-[3px] rounded-[100%] text-[#f00] text-[18px] cursor-pointer" title="close" onclick="alert_close()"><i class="bi-x"></i></div>
        </div>

        <div class="w-[100%] h-[calc(100%-50px)] absolute overflow-auto">
            <div class="w-[90%] mb-[20px] m-auto">
                <div class="my-[20px] text-[12px] flex flex-col gap-[5px] w-[100%] min-h-[200px] bg-[#F4FDF8] border-[#A5EAC2] border-[1px] p-[20px]">
                    <div class="mb-[15px] text-[#46A0DD] font-bold">NACOS & DEPARTMENTAL PAYMENT FEE</div>

                    <div class="w-[100%]">
                        <label class="px-[10px] text-primary-color"> NACOS FEE:</label><br/>
                        <input class="formInput" type="text" id="nacos_fee_amount" placeholder="NACOS FEE"/>
                    </div>

                    <div class="w-[100%]">
                        <label class="px-[10px] text-primary-color"> DEPARTMENTAL FEE:</label><br/>
                        <input class="formInput" type="text" id="departmental_fee_amount" placeholder="DEPARTMENTAL FEE"/>
                    </div>
                </div>

                <div class="my-[20px] text-[12px] flex flex-col gap-[5px] w-[100%] min-h-[200px] bg-[#F4FDF8] border-[#A5EAC2] border-[1px] p-[20px]">
                    <div class="mb-[15px] text-[#46A0DD] font-bold">SMTP DETAILS</div>
            
                    <div class="w-[100%]">
                        <label class="px-[10px] text-primary-color"> SMTP HOST:</label><br/>
                        <input class="formInput" type="text" id="smtp_host" placeholder="SMTP HOST"/>
                    </div>

                    <div class="w-[100%]">
                        <label class="px-[10px] text-primary-color"> SMTP USERNAME:</label><br/>
                        <input class="formInput" type="text" id="smtp_username" placeholder="SMTP USERNAME"/>
                    </div>

                    <div class="w-[100%]">
                        <label class="px-[10px] text-primary-color"> SMTP PASSWORD:</label><br/>
                        <input class="formInput" type="text" id="smtp_password" placeholder="SMTP PASSWORD"/>
                    </div>

                    <div class="w-[100%]">
                        <label class="px-[10px] text-primary-color"> SMTP PORT:</label><br/>
                        <input class="formInput" type="text" id="smtp_port" placeholder="SMTP PORT"/>
                    </div>

                    <div class="w-[100%]">
                        <label class="px-[10px] text-primary-color"> SUPPORT EMAIL:</label><br/>
                        <input class="formInput" type="text" id="support_email" placeholder="SUPPORT EMAIL"/>
                    </div>
                </div>
                <button class="w-[40%]" title="submit" id="submit_btn" onclick="updateSystem();"><i class="bi-check2"></i> UPDATE</button>
            </div>
        </div>
        <script>fetchBackend();</script>
    </div>
<?php }?>

<?php if ($page=='add-faculty'){?>
    <div class="absolute h-screen w-[500px] bg-white right-0 animated fadeInRight">
        <div class="formHeader">
            <p class="text-white text-[13px] font-semibold font-title"><i class="bi-cash-coin"></i> Add New Faculty Form </p>
            <div class="bg-white bg-opacity-80 px-[8px] py-[3px] rounded-[100%] text-[#f00] text-[18px] cursor-pointer" title="close" onclick="alert_close()"><i class="bi-x"></i></div>
        </div>

        <div class="w-[100%] h-[calc(100%-50px)] absolute overflow-auto">

            <div class="w-[90%] m-auto">
                 <div class="mt-[15px] p-[10px] bg-[#FAF3F0] border border-solid border-[#F2BDA2] font-title">
                    <p class="text-[#424141]">Kindly fill the form below to <span class="text-[#83C2E7] font-bold">Add New Faculty</span></p>
                </div>

                <div class="my-[20px] text-[12px] flex flex-col gap-[5px]">
                    <div class="w-[100%]">
                        <label class="px-[10px] text-primary-color"> FACULTY NAME:</label><br/>
                        <input class="formInput" type="text" id="faculty_name" placeholder="FACULTY NAME"/>
                    </div>

                    <button class="w-[40%]" title="submit" id="submit_btn" onclick="_add_new_faculty();"><i class="bi-check2"></i> SUBMIT</button>
                </div>
            </div>
        </div>
    </div>
<?php }?>

<?php if ($page=='update-faculty'){?>
    <div class="absolute h-screen w-[500px] bg-white right-0 animated fadeInRight">
        <div class="formHeader">
            <p class="text-white text-[13px] font-semibold font-title"><i class="bi-cash-coin"></i> Update Faculty Form </p>
            <div class="bg-white bg-opacity-80 px-[8px] py-[3px] rounded-[100%] text-[#f00] text-[18px] cursor-pointer" title="close" onclick="alert_close()"><i class="bi-x"></i></div>
        </div>

        <div class="w-[100%] h-[calc(100%-50px)] absolute overflow-auto">

            <div class="w-[90%] m-auto">

                <div class="my-[20px] text-[12px] flex flex-col gap-[5px]">
                    <div class="w-[100%]">
                        <label class="px-[10px] text-primary-color"> FACULTY NAME:</label><br/>
                        <input class="formInput" type="text" id="faculty_name" placeholder="FACULTY NAME"/>
                    </div>

                    <button class="w-[40%]" title="submit" id="submit_btn" onclick="updateFaculty('<?php echo $ids; ?>')"><i class="bi-check2"></i> UPDATE</button>
                </div>
            </div>
        </div>
        <script>fetchEachFaculty('<?php echo $ids; ?>')</script>
    </div>
<?php }?>

<?php if ($page=='add-department'){?>
    <div class="absolute h-screen w-[500px] bg-white right-0 animated fadeInRight">
        <div class="formHeader">
            <p class="text-white text-[13px] font-semibold font-title"><i class="bi-cash-coin"></i> Add New Department Form </p>
            <div class="bg-white bg-opacity-80 px-[8px] py-[3px] rounded-[100%] text-[#f00] text-[18px] cursor-pointer" title="close" onclick="alert_close()"><i class="bi-x"></i></div>
        </div>

        <div class="w-[100%] h-[calc(100%-50px)] absolute overflow-auto">

            <div class="w-[90%] m-auto">
                 <div class="mt-[15px] p-[10px] bg-[#FAF3F0] border border-solid border-[#F2BDA2] font-title">
                    <p class="text-[#424141]">Kindly fill the form below to <span class="text-[#83C2E7] font-bold">Add New Department</span></p>
                </div>

                <div class="my-[20px] text-[12px] flex flex-col gap-[5px]">
                    <div class="w-[100%]">
                        <label class="px-[10px] text-primary-color"> FACULTY:</label><br/>
                        <select class="formInput" id="faculty_id">
                            <option>Select Faculty</option>
                            <script>_get_faculty();</script>
                        </select>
                    </div>

                    <div class="w-[100%]">
                        <label class="px-[10px] text-primary-color"> DEPARTMENT NAME:</label><br/>
                        <input class="formInput" type="text" id="department_name" placeholder="DEPARTMENT NAME"/>
                    </div>

                    <button class="w-[40%]" title="submit" id="submit_btn" onclick="_add_new_department()"><i class="bi-check2"></i> SUBMIT</button>
                </div>
            </div>
        </div>
    </div>
<?php }?>

<?php if ($page=='update-department'){?>
    <div class="absolute h-screen w-[500px] bg-white right-0 animated fadeInRight">
        <div class="formHeader">
            <p class="text-white text-[13px] font-semibold font-title"><i class="bi-cash-coin"></i> Update Department Form </p>
            <div class="bg-white bg-opacity-80 px-[8px] py-[3px] rounded-[100%] text-[#f00] text-[18px] cursor-pointer" title="close" onclick="alert_close()"><i class="bi-x"></i></div>
        </div>

        <div class="w-[100%] h-[calc(100%-50px)] absolute overflow-auto">

            <div class="w-[90%] m-auto">

                <div class="my-[20px] text-[12px] flex flex-col gap-[5px]">
                    <div class="w-[100%]">
                        <label class="px-[10px] text-primary-color"> FACULTY:</label><br/>
                        <select class="formInput" id="faculty_id">
                            <option>Select Faculty</option>
                            <script>_get_faculty();</script>
                        </select>
                    </div>

                    <div class="w-[100%]">
                        <label class="px-[10px] text-primary-color"> DEPARTMENT NAME:</label><br/>
                        <select class="formInput" id="department_id">
                            <script>
                                 $('#faculty_id').on('change', function() {
                                var faculty_id = $(this).val(); 
                                 _get_department(faculty_id); 
                                });
                            </script>
                        </select>
                    </div>

                    <div class="w-[100%]">
                        <label class="px-[10px] text-primary-color"> STATUS:</label><br/>
                        <select class="formInput" id="status_id">
                            <script>_get_status();</script>
                        </select>
                    </div>

                    <button class="w-[40%]" title="submit" id="submit_btn" onclick="updateDepartment('<?php echo $ids; ?>')"><i class="bi-check2"></i> UPDATE</button>
                </div>
            </div>
        </div>
        <script>fetchEachDepartment('<?php echo $ids; ?>')</script>
    </div>
<?php }?>

<?php if ($page=='notification-module'){?>
    <div class="absolute h-screen w-[500px] bg-white right-0 animated fadeInRight">
        <div class="formHeader">
            <p class="text-white text-[13px] font-semibold font-title"><i class="bi-bell"></i> Notification Details </p>
            <div class="bg-white bg-opacity-80 px-[8px] py-[3px] rounded-[100%] text-[#f00] text-[18px] cursor-pointer" title="close" onclick="alert_close()"><i class="bi-x"></i></div>
        </div>

        <div class="w-[100%] h-[calc(100%-50px)] absolute overflow-auto">

            <div class="w-[90%] m-auto">
                <div class="my-[20px] text-base text-[#B2B7B6] font-bold font-body flex flex-col gap-[5px] w-[100%] bg-[#FAF3F0] border-[#F2BDA2] border-[1px] py-[10px] px-[15px]">
                    <div>User ID: <strong class="text-[#46A0DD]" id="user_id"></strong></div>
                    <div>Action Performed By: <strong class="text-[#46A0DD]" id="fullname"></strong></div>
                    <div>IP Address Used: <strong class="text-[#46A0DD]" id="ip_address"></strong></div>
                    <div>Computer Used: <strong class="text-[#46A0DD]" id="system_used"></strong></div>
                </div>

                <div class="my-[20px] text-base text-[#B2B7B6] font-bold font-body flex flex-col gap-[5px] w-[100%] bg-[#FAF3F0] border-[#F2BDA2] border-[1px] py-[10px] px-[15px]">
                    <div>Alert ID: <strong class="text-[#46A0DD]" id="alert_id"></strong></div>
                    <div>Date: <strong class="text-[#46A0DD]" id="date"></strong></div>
                </div>

                <div class="pl-[10px] mb-[5px] text-primary-color font-bold font-title">Alert Details:</div>
                <div class="text-base text-[#B2B7B6] font-bold font-body flex flex-col gap-[5px] w-[100%] bg-[#F0F9F4] border-[#A2E8C0] border-[1px] py-[10px] px-[15px]" id="alert_description"></div>
                <button class="w-[40%] mt-[15px]" title="OK" id="submit_btn" onclick="alert_close()"><i class="bi-check2"></i> OK</button>
            </div>
        </div>
        <script>_get_each_notification('<?php echo $ids; ?>')</script>
    </div>
<?php }?>

<?php if($page=='student-profile-module'){?>
    <div class="absolute h-screen w-[90%] right-[5%] top-[55px] bg-white animated fadeInUp">
        <div class="formHeader">
            <p class="text-white text-[13px] font-bold"><i class="bi-person-fill"></i> STUDENT DETAILS</p>
            <div class="bg-white bg-opacity-80 px-[8px] py-[3px] rounded-[100%] text-[#f00] text-[18px] cursor-pointer" title="close" onclick="alert_close()"><i class="bi-x"></i></div>
        </div>

        <div class="w-[100%] h-[calc(100%-55px)] no-overflow bg-white" id="sb-container">
           <div class="w-[90%] m-auto">
                <div class="w-[100%] min-h-[120px] flex justify-between border-b border-solid border-[#CECDCD]">
                    
                    <div class="w-[65%] flex items-center">
                        <div class="w-[70px] h-[70px]">
                            <img id="student_pic" class="w-[100%] h-[100%] object-cover rounded-[5px]" alt="profile_pix" title="Profile Pix" style="width: 70px; height: 70px; object-position: top;" />
                        </div>

                        <div class="flex flex-col px-[20px]">
                            <p class="text-[20px] font-title" id="fullname">XXXX</p>
                            <p class="text-primary-color text-[10px]">Last Login Date: <strong id="last_login">xxxx</strong></p>
                        </div>

                    </div>
                </div>

                <nav class="pt-[20px]">
                    <ul class="flex gap-[5px]">
                        <li class="py-[8px] px-[15px] hover:bg-[#d4d4d4] bg-[#d4d4d4] rounded cursor-pointer active" onclick="setActive(this); _next_page('student-profile')"><i class="bi-person-fill text-primary-color"></i> PROFILE</li>
                        <li class="py-[8px] px-[15px] hover:bg-[#d4d4d4] rounded cursor-pointer active" onclick="setActive(this); _next_page('payment-history')"><i class="bi-clock-fill text-primary-color"></i> PAYMENT HISTORY</li>
                    </ul>
                </nav>
                
                <?php $page="student-profile";?>
                <?php include 'content-page.php';?>
           </div>
        </div>
    </div>
<?php }?>

<script type="text/javascript">$("#sb-container").scrollBox();</script>