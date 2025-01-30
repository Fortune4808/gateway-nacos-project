<?php if($page=='dashboard'){?>
    <div class="w-[98%] flex gap-2 mt-3 flex-wrap content-start">
        <div class="count-div">
            <div class="w-[90%] m-5 font-bold">
                <div class="text-2xl counter" id="total_staff"></div>
                <div class="text-sm">TOTAL ADMIN/STAFF</div>
                <i class="bi-people-fill text-3xl"></i>
            </div>
        </div>

        <div class="count-div">
            <div class="w-[90%] m-5 font-bold">
                <div class="text-2xl counter" id="total_student"></div>
                <div class="text-sm">TOTAL STUDENT</div>
                <i class="bi-mortarboard-fill text-3xl"></i>
            </div>
        </div>

        <div class="count-div">
            <div class="w-[90%] m-5 font-bold">
                <div class="text-2xl">NGN <span class="counter" id="expected_dept_fee"></span></div>
                <div class="text-sm">EXPECTED DEPARTMENTAL BALANCE</div>
                <i class="bi-book-fill text-3xl"></i>
            </div>
        </div>

        <div class="count-div">
            <div class="w-[90%] m-5 font-bold">
                <div class="text-2xl">NGN <span class="counter" id="department_balance"></span></div>
                <div class="text-sm">DEPARTMENTAL BALANCE</div>
                <i class="bi-book-fill text-3xl"></i>
            </div>
        </div>

        <div class="count-div">
            <div class="w-[90%] m-5 font-bold">
                <div class="text-2xl">NGN <span class="counter" id="expected_nacos_balance"></span></div>
                <div class="text-sm">EXPECTED NACOS BALANCE</div>
                <i class="bi-book-fill text-3xl"></i>
            </div>
        </div>
				
        <div class="count-div">
            <div class="w-[90%] m-5 font-bold">
                <div class="text-2xl">NGN <span class="counter" id="nacos_balance"></span></div>
                <div class="text-sm">NACOS BALANCE</div>
                <i class="bi-wallet-fill text-3xl"></i>
            </div>
        </div>

        <div class="count-div">
            <div class="w-[90%] m-5 font-bold">
                <div class="text-2xl">NGN <span class="counter" id="total_balance"></span></div>
                <div class="text-sm">TOTAL BALANCE</div>
                <i class="bi-wallet-fill text-3xl"></i>
            </div>
        </div>

        <div class="count-div">
            <div class="w-[90%] m-5 font-bold">
                <div class="text-2xl">NGN <span class="counter" id="total_spent"></span></div>
                <div class="text-sm">TOTAL AMOUNT SPENT</div>
                <i class="bi-wallet-fill text-3xl"></i>
            </div>
        </div>

        <script>all_counts();</script>
        <script>_session_validation();</script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.0/jquery.waypoints.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.min.js"></script>

        <script>
            $(document).ready(function() {
                $('.counter').counterUp({
                    delay: 10, 
                    time: 1000 
                });
            });
        </script>
	</div>
<?php }?>

<?php if($page=='all-staff'){?>
   <div class="w-[100%] h-[55px] text-white bg-[#EBEBEB] rounded-md font-body">
        <div class="w-[95%] h-[55px] m-auto flex justify-between items-center content-center gap-[5px] text-[10px] text-[#ABABAB]">
            <select class="w-[20%] h-[45px] bg-white pl-[20px] rounded-[5px] focus:border-black border-solid border focus:border-opacity-30 flex flex-grow" id="status_id" onchange="_all_staff(this.value, faculty_id, department_id);">
                <option value="">All Status</option>
                <script>_get_status();</script>
            </select>

            <select class="w-[20%] h-[45px] bg-white pl-[20px] rounded-[5px] focus:border-black border-solid border focus:border-opacity-30 flex flex-grow" id="faculty_id" onchange="_all_staff(status_id, this.value, department_id);">
                <option value="">All Faculty</option>
                <script>_get_faculty();</script>
            </select>

            <select class="w-[20%] h-[45px] bg-white pl-[20px] rounded-[5px] focus:border-black border-solid border focus:border-opacity-30 flex flex-grow" id="department_id" onchange="_all_staff(status_id, faculty_id, this.value);">
                <option value="">All Department</option>
                 <script>
                    $('#faculty_id').on('change', function() {
                    var faculty_id = $(this).val(); 
                        _get_department(faculty_id); 
                    });
                </script>
            </select>
            <input class="w-[30%] h-[45px] bg-white pl-[20px] rounded-[5px] outline-none focus:border-black border-solid border focus:border-opacity-30 flex flex-grow" type="text" id="search" onkeyup="_all_staff('');" placeholder="Type here to search..." title="Type here to search"/>
        </div>

        <div class="w-[100%] h-[40px] bg-[#ECF5F0] border-solid border border-[#A0E5BD] flex justify-center">
            <div class="w-[98%] flex items-center justify-between text-[#424141]">
                <div><i class="bi-people-fill"></i>  ACTIVE ADMINISTRATOR'S LIST</div>
                <button class="text-sm py-[5px] px-[10px] bg-[#0E4000]" title="Add new staff"  onClick="_get_form('staff_reg');">ADD NEW STAFF <i class="bi-person-plus"></i></button>
            </div>
        </div>

        <div class="w-[98%] m-auto mt-[15px] flex justify-center flex-wrap gap-[15px]" id="fetch_all_staff">
            <script>_all_staff('');</script>
        </div>
   </div>
<?php }?>


<?php if($page=='all-student'){?>
   <div class="w-[100%] h-[55px] rounded-md font-body">
        <div class="w-[95%] h-[55px] m-auto flex justify-between items-center content-center gap-[5px] text-[10px] text-[#ABABAB]">
            <select class="w-[20%] h-[45px] bg-white pl-[20px] rounded-[5px] focus:border-black border-solid border focus:border-opacity-30 flex flex-grow" id="status_id" onchange="_all_student(1, this.value, faculty_id, department_id, level_id);">
                <option value="">All Status</option>
                <script>_get_status();</script>
            </select>

            <select class="w-[20%] h-[45px] bg-white pl-[20px] rounded-[5px] focus:border-black border-solid border focus:border-opacity-30 flex flex-grow" id="faculty_id" onchange="_all_student(1, status_id, this.value, department_id, level_id)">
                <option value="">All Faculty</option>
                <script>_get_faculty();</script>
            </select>

            <select class="w-[20%] h-[45px] bg-white pl-[20px] rounded-[5px] focus:border-black border-solid border focus:border-opacity-30 flex flex-grow" id="department_id" onchange="_all_student(1, status_id, faculty_id, this.value, level_id)">
                <option value="">All Department</option>
                <script>
                    $('#faculty_id').on('change', function() {
                    var faculty_id = $(this).val(); 
                        _get_department(faculty_id); 
                    });
                </script>
            </select>

             <select class="w-[20%] h-[45px] bg-white pl-[20px] rounded-[5px] focus:border-black border-solid border focus:border-opacity-30 flex flex-grow" id="level_id" onchange="_all_student(1, status_id, faculty_id, department_id, this.value)">
                <option value="">All Levels</option>
                <script>_get_level();</script>
            </select>
            <input class="w-[30%] h-[45px] bg-white pl-[20px] rounded-[5px] outline-none focus:border-black border-solid border focus:border-opacity-30 flex flex-grow" type="text" id="search" onkeyup="_all_student(1, '');" placeholder="Type here to search..." title="Type here to search"/>
        </div>


        <div class="w-[100%] h-[40px] bg-[#ECF5F0] border-solid border border-[#A0E5BD] flex justify-center">
            <div class="w-[98%] flex items-center justify-between text-[#424141]">
                <div><i class="bi-people-fill"></i>  ACTIVE STUDENT'S LIST</div>
            </div>
        </div>

        <div class="w-[98%] m-auto mt-[10px]" id="fetch_all_student">
            <script>_all_student(1);</script>
        </div>
   </div>  
<?php }?>

<?php if ($page=='notification'){?>
    <div class="w-[100%] h-[55px] text-white bg-[#EBEBEB] rounded-md font-body">
        <div class="w-[95%] h-[55px] m-auto flex justify-between items-center content-center gap-[5px] text-[10px] text-[#ABABAB]">
            <input class="w-[20%] h-[45px] bg-white pl-[20px] rounded-[5px] outline-none focus:border-black border-solid border focus:border-opacity-30 flex flex-grow" type="date" id="start_date" title=""/>
            <input class="w-[20%] h-[45px] bg-white pl-[20px] rounded-[5px] outline-none focus:border-black border-solid border focus:border-opacity-30 flex flex-grow" type="date" id="end-date" title=""/>
            <button class="text-sm py-[8px] px-[15px]" title="submit" id="submit_btn" onclick="_all_notification($('#start_date').val(), $('#end-date').val())"><i class="bi-check2"></i> FETCH</button>
            <input class="w-[30%] h-[45px] bg-white pl-[20px] rounded-[5px] outline-none focus:border-black border-solid border focus:border-opacity-30 flex flex-grow" type="text" id="search" onkeyup="_all_notification('', '')" placeholder="Type here to search..." title="Type here to search"/>
        </div>

        <div class="bg-[#F4FDF8] text-[#A2A2A2] border-[#A5EAC2] border-[1px] w-[95%] mx-auto mt-[10px] flex gap-1 p-[10px] pl-[30px] text-[12px]">
            <i class="bi bi-bell text-[#46A0DD]"></i><p>Notifications</p>
        </div>

        <div class="mt-[10px] w-[95%] m-auto flex justify-center gap-[10px] flex-wrap" id="fetch_all_notification">
            <script>_all_notification('', '');</script>
        </div>
   </div>  
<?php }?>

<?php if($page=='student-profile'){?>
    <div class="mt-[60px] mb-[150px] log-div" id="student-profile">
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
                <input class="formInput" type="date" id="" placeholder="DATE OF BIRTH"/>
            </div>

            <div class="w-[100%]">
                <label class="px-[15px] text-gray-500"> GENDER:</label><br/>
                <select class="formInput" id="gender_id">
                    <script>_get_gender();</script>
                </select>
            </div>

            <div class="w-[100%]">
                <label class="px-[15px] text-gray-500"> RELIGION AFFILIATION:</label><br/>
                <select class="formInput" id="">
                   
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
                <input class="formInput" type="tel" id="mobileno" placeholder="PHONE NUMBER"/>
            </div>
        </div>

        <div class="text-[14px] font-bold text-primary-color pl-[10px] pb-[15px] mt-[50px] border-b border-primary-color">NACOS FEE INFORMATION</div>

        <div class="mt-[10px] text-[12px] flex gap-[5px]">
            <div class="w-[100%]">
                <label class="px-[15px] text-gray-500"> FIRST SESSION FEE:</label><br/>
                <div class="relative flex items-center">
                    <input class="formInput" type="text" readonly="readonly" id="first_s_nacos" placeholder="FIRST SESSION FEE"/>
                    <i class="bi-lock-fill absolute right-3 text-primary-color"></i>
                </div>
            </div>

            <div class="w-[100%]">
                <label class="px-[15px] text-gray-500"> STATUS:</label><br/>
                <select class="formInput" id="first_s_nacos_status_id">
                    <script>
                      
                    </script>
                </select>
            </div>
        </div>

        <div class="mt-[10px] text-[12px] flex gap-[5px]">
            <div class="w-[100%]">
                <label class="px-[15px] text-gray-500"> SECOND SESSION FEE:</label><br/>
                <div class="relative flex items-center">
                    <input class="formInput" type="text" readonly="readonly" id="second_s_nacos" placeholder="SECOND SESSION FEE"/>
                    <i class="bi-lock-fill absolute right-3 text-primary-color"></i>
                </div>
            </div>

            <div class="w-[100%]">
                <label class="px-[15px] text-gray-500"> STATUS:</label><br/>
                <select class="formInput" id="second_s_nacos_status_id">
                    <script>
                     
                    </script>
                </select>
            </div>
        </div>

        <div class="text-[14px] font-bold text-primary-color pl-[10px] pb-[15px] mt-[50px] border-b border-primary-color">DEPARTMENTAL FEE INFORMATION</div>

        <div class="mt-[10px] text-[12px] flex gap-[5px]">
            <div class="w-[100%]">
                <label class="px-[15px] text-gray-500"> FIRST SESSION FEE:</label><br/>
                <div class="relative flex items-center">
                    <input class="formInput" type="text" readonly="readonly" id="first_s_dept" placeholder="FIRST SESSION FEE"/>
                    <i class="bi-lock-fill absolute right-3 text-primary-color"></i>
                </div>
            </div>

            <div class="w-[100%]">
                <label class="px-[15px] text-gray-500"> STATUS:</label><br/>
                <select class="formInput" id="first_s_dept_status_id">
                    <script>
                     
                    </script>
                </select>
            </div>
        </div>

        <div class="mt-[10px] text-[12px] flex gap-[5px]">
            <div class="w-[100%]">
                <label class="px-[15px] text-gray-500"> SECOND SESSION FEE:</label><br/>
                <div class="relative flex items-center">
                    <input class="formInput" type="text" readonly="readonly" id="second_s_dept" placeholder="SECOND SESSION FEE"/>
                    <i class="bi-lock-fill absolute right-3 text-primary-color"></i>
                </div>
            </div>

            <div class="w-[100%]">
                <label class="px-[15px] text-gray-500"> STATUS:</label><br/>
                <select class="formInput" id="second_s_dept_status_id">
                    <script>
                      
                    </script>
                </select>
            </div>
        </div>

        <div class="text-[14px] font-bold text-primary-color pl-[10px] pb-[15px] mt-[50px] border-b border-primary-color">ACCOUNT INFORMATION</div>

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
                <label class="px-[15px] text-gray-500"> STUDENT LEVEL:</label><br/>
                <select class="formInput" id="level_id">
                    <script>//_get_faculty();</script>
                </select>
            </div>

            <div class="w-[100%]">
                <label class="px-[15px] text-gray-500"> PROGRAM:</label><br/>
                <select class="formInput" id="program_id">
                    <script></script>
                </select>
            </div>

            <div class="w-[100%]">
                <label class="px-[15px] text-gray-500"> SESSION:</label><br/>
                <div class="relative flex items-center">
                    <input class="formInput" type="text" readonly="readonly" id="session" placeholder="SESSION"/>
                    <i class="bi-lock-fill absolute right-3 text-primary-color"></i>
                </div>
            </div>
        </div>
                
        <div class="mt-[10px] text-[12px] flex gap-[5px]">
            <div class="w-[100%]">
                <label class="px-[15px] text-gray-500"> MATRIC NUMBER:</label><br/>
                <div class="relative flex items-center">
                    <input class="formInput" type="text" readonly="readonly" id="student_id" placeholder="MATRIC NUMBER"/>
                    <i class="bi-lock-fill absolute right-3 text-primary-color"></i>
                </div>
            </div>

            <div class="w-[100%]">
                <label class="px-[15px] text-gray-500"> DATE OF REGISTRATION:</label><br/>
                <div class="relative flex items-center">
                    <input class="formInput" type="text" readonly="readonly" id="reg_date" placeholder="DATE OF REGISTRATION"/>
                    <i class="bi-lock-fill absolute right-3 text-primary-color"></i>
                </div>
            </div>
        </div>

        <button class="w-[15%] float-right mt-[20px]" id="submit_btn" title="" onclick="">UPDATE PROFILE <i class="bi-check2"></i></button>
        <script>_get_student_profile('<?php echo $ids;?>')</script>
    </div>
<?php }?>

<?php if($page=='expenses-module'){?>
   <div class="w-[100%] h-[55px] text-white bg-[#EBEBEB] rounded-md font-body">
        <div class="w-[95%] mx-[auto]">
            <input class="w-[100%] h-[40px] mt-[7.5px] outline-none px-[10px] text-black/50 rounded-md focus:border border-black/30" type="text" id="search" onkeyup="fetchExpenses(1, '')"/>
        </div>

        <div class="w-[100%] h-[40px] bg-[#ECF5F0] mt-[7px] border-solid border border-[#A0E5BD] flex justify-center">
            <div class="w-[98%] flex items-center justify-between text-[#424141]">
                <div><i class="bi-cash-coin"></i>  ALL EXPENSES LIST</div>
                <button class="text-sm py-[5px] px-[10px] bg-[#0E4000]" title="Add new expenses"  onClick="_get_form('new-expenses');">ADD NEW EXPENSES <i class="bi-cash-coin"></i></button>
            </div>
        </div>

        <div class="w-[98%] m-auto mt-[10px]" id="fetch_all_expenses">
            <script>fetchExpenses(1);</script>
        </div>
   </div>  
<?php }?>

<?php if($page=='faculty-module'){?>
   <div class="w-[100%] h-[55px] text-white bg-[#EBEBEB] rounded-md font-body">
        <div class="w-[95%] mx-[auto]">
            <input class="w-[100%] h-[40px] mt-[7.5px] outline-none px-[10px] text-black/50 rounded-md focus:border border-black/30" type="text" id="search" onkeyup="fetchFaculties(1, '')"/>
        </div>

        <div class="w-[100%] h-[40px] bg-[#ECF5F0] mt-[7px] border-solid border border-[#A0E5BD] flex justify-center">
            <div class="w-[98%] flex items-center justify-between text-[#424141]">
                <div><i class="bi-cash-coin"></i>  ALL FACULTY LIST</div>
                <button class="text-sm py-[5px] px-[10px] bg-[#0E4000]" title="Add new faculty"  onClick="_get_form('add-faculty');">ADD NEW FACULTY <i class="bi-cash-coin"></i></button>
            </div>
        </div>

        <div class="w-[98%] m-auto mt-[10px]" id="fetch_all_faculty">
            <script>fetchFaculties(1, '');</script>
        </div>
   </div>  
<?php }?>

<?php if($page=='department-module'){?>
   <div class="w-[100%] h-[55px] text-white bg-[#EBEBEB] rounded-md font-body">
        <div class="w-[95%] mx-[auto]">
            <input class="w-[100%] h-[40px] mt-[7.5px] outline-none px-[10px] text-black/50 rounded-md focus:border border-black/30" type="text" id="search" onkeyup="fetchDepartment(1, '')"/>
        </div>

        <div class="w-[100%] h-[40px] bg-[#ECF5F0] mt-[7px] border-solid border border-[#A0E5BD] flex justify-center">
            <div class="w-[98%] flex items-center justify-between text-[#424141]">
                <div><i class="bi-cash-coin"></i>  ALL DEPARTMENT LIST</div>
                <button class="text-sm py-[5px] px-[10px] bg-[#0E4000]" title="Add new department"  onClick="_get_form('add-department');">ADD NEW DEPARTMENT <i class="bi-cash-coin"></i></button>
            </div>
        </div>

        <div class="w-[98%] m-auto mt-[10px]" id="fetch_all_department">
            <script>fetchDepartment(1, '');</script>
        </div>
   </div>  
<?php }?>

<?php include 'aos-script.php';?>


<script>
    superplaceholder({
        el: search,
            sentences: [ 'Type here to search'],
            options: {
            letterDelay: 80,
            loop: true,
            startOnFocus: false
        }
    });
</script>



  

