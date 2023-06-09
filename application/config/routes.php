<?php
defined('BASEPATH') OR exit('No direct script access allowed'); 

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'Home';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;


//admin
$route['login']='Home';
$route['doLogin']='Home/doLogin';
$route['forgot-password']='Home/forgot_password';
$route['admin/dashboard']='Admin/Home';
$route['admin/logout']='Admin/Home/logout';

$route['admin/employee']='Admin/Employee';
$route['admin/sendme']='Admin/Employee/sendme';
$route['admin/filterEmployee']='Admin/Employee/filterEmployee';
$route['admin/account_type']='Admin/Employee/account_type';
$route['admin/deleteAccountType/(:any)']='Admin/Employee/deleteAccountType/$1';
$route['admin/account_type_status/(:any)/(:num)']='Admin/Employee/account_type_status/$1/$2';
$route['admin/expense_type']='Admin/Employee/expense_type';
$route['admin/deleteexpense_type/(:any)']='Admin/Employee/deleteexpense_type/$1';
$route['admin/expense_type_status/(:any)/(:num)']='Admin/Employee/expense_type_status/$1/$2';
$route['admin/emp_expense_claim']='Admin/Employee/emp_expense_claim';
$route['admin/expense_claim_status/(:any)/(:num)']='Admin/Employee/expense_claim_status/$1/$2';
$route['admin/addRemark'] = 'Admin/Employee/addRemark';
$route['admin/editRemark'] = 'Admin/Employee/editRemark';
$route['admin/department']='Admin/CoreHr';
$route['admin/designation']='Admin/CoreHr/designation';
$route['admin/announcements']='Admin/CoreHr/announcements';
$route['admin/policies']='Admin/CoreHr/policies';
$route['admin/addDepartment']='Admin/CoreHr/addDepartment';
$route['admin/editDepartment']='Admin/CoreHr/editDepartment';
$route['admin/deleteDepartment/(:any)']='Admin/CoreHr/deleteDepartment/$1';
$route['admin/addDesignation']='Admin/CoreHr/addDesignation';
$route['admin/editDesignation']='Admin/CoreHr/editDesignation';
$route['admin/deleteDesignation/(:any)']='Admin/CoreHr/deleteDesignation/$1';
$route['admin/roles'] = 'Admin/Employee/role'; //s
$route['admin/sequence_number'] = 'admin/home/sequence_number'; //s
$route['admin/add_sequence_number'] = 'admin/home/add_sequence_number'; //s
$route['admin/add_sequence_number'] = 'admin/home/add_sequence_number'; //s
$route['admin/edit_sequence_number'] = 'admin/home/edit_sequence_number'; //s
$route['admin/delete_sequence_number/(:any)'] = 'admin/home/delete_sequence_number/$1'; //s
$route['admin/delete_sequence_number/(:any)'] = 'admin/home/delete_sequence_number/$1'; //s

$route['admin/sequence_number_checked'] = 'Admin/Employee/sequence_number_checked';

$route['admin/addEmployee'] = 'Admin/Employee/addEmployee';
$route['admin/addEmployeeForm'] = 'Admin/Employee/addEmployeeForm';
$route['admin/editEmployee/(:any)'] = 'Admin/Employee/editEmployee/$1';
$route['admin/editEmployeeForm'] = 'Admin/Employee/editEmployeeForm';
$route['admin/deleteEmployee/(:any)'] = 'Admin/Employee/deleteEmployee/$1';
$route['admin/changeStatusEmployee/(:any)/(:num)'] = 'Admin/Employee/changeStatusEmployee/$1/$2';
$route['admin/profile']='Admin/Employee/profile';
$route['admin/addProfileForm'] = 'Admin/Employee/addProfileForm';
$route['admin/add_profession_tax'] = 'Admin/Employee/add_profession_tax';
$route['admin/list_of_values'] = 'Admin/Employee/list_of_values';
$route['admin/checked_list_of_values'] = 'Admin/Employee/checked_list_of_values';
$route['admin/it_declaration_data'] = 'Admin/Employee/it_declaration_data';
$route['admin/edit_profession_tax/(:any)'] = 'Admin/Employee/edit_profession_tax/$1';
$route['admin/delete_profession_tax/(:any)'] = 'Admin/Employee/delete_profession_tax/$1';
$route['admin/delete_list_of_values/(:any)'] = 'Admin/Employee/delete_list_of_values/$1';
$route['admin/add_company_settings'] = 'Admin/Employee/add_company_setting';
$route['admin/getdesignation'] = 'Admin/Employee/getdesignation';
$route['admin/validate_empid'] = 'Admin/Employee/validate_empid';
$route['admin/itSectionMaxLimit'] = 'Admin/Employee/itSectionMaxLimit';
$route['admin/exmpGroupMapD'] = 'Admin/Employee/exmpGroupMapD';
$route['admin/ts_slabs_fun'] = 'Admin/Employee/ts_slabs_fun';
$route['admin/pt_slabs_ajaxFun'] = 'Admin/Employee/pt_slabs_ajaxFun';
$route['admin/checked_it_sectionMaxLimit'] = 'Admin/Employee/checked_it_sectionMaxLimit';
$route['admin/checked_exemption_grpMap'] = 'Admin/Employee/checked_exemption_grpMap';
$route['admin/checked_profession_ts'] = 'Admin/Employee/checked_profession_ts';

$route['admin/addAnnouncement'] = 'Admin/CoreHr/addAnnouncement';
$route['admin/editAnnouncement'] = 'Admin/CoreHr/editAnnouncement';
$route['admin/deleteAnnoucment/(:any)'] = 'Admin/CoreHr/deleteAnnoucment/$1';

$route['admin/addPolicies'] = 'Admin/CoreHr/addPolicies';
$route['admin/editPolicies'] = 'Admin/CoreHr/editPolicies';
$route['admin/deletePolicies/(:any)'] = 'Admin/CoreHr/deletePolicies/$1';

//Attendance
$route['admin/attendance'] = 'Admin/Attendence';
$route['admin/manual_attendance'] = 'Admin/Attendence/manual_attendance';
$route['admin/monthly_report'] = 'Admin/Attendence/monthly_report';
$route['admin/overtime_request'] = 'Admin/Attendence/overtime_request';

//Job Vacancy
$route['admin/add_offer_breakup'] = 'Admin/Job/add_offer_breakup';
$route['admin/offer_breakup'] = 'Admin/Job/offer_breakup';
$route['admin/edit_offer/(:any)'] = 'Admin/Job/edit_offer/$1';
$route['admin/delete_offer/(:any)'] = 'Admin/Job/delete_offer/$1';
$route['admin/offer_print_view/(:any)'] = 'Admin/Job/offer_print_view/$1';

//Leave
$route['admin/leave_request'] = 'Admin/Leave';
$route['admin/compoff_leave_request'] = 'Admin/Leave/compoff_leave_request';
$route['admin/leave-type'] = 'Admin/Leave/leave_type'; 
$route['admin/add_leave_type'] = 'Admin/Leave/add_leave_types';
$route['admin/add_account_type'] = 'Admin/Employee/add_account_type';
$route['admin/edit_leave_type'] = 'Admin/Leave/edit_leave_types';
$route['admin/leave_approval_status/(:any)/(:num)'] = 'Admin/Leave/leave_approval_status/$1/$2';
$route['admin/compoff_leave_approval_status/(:any)/(:num)'] = 'Admin/Leave/compoff_leave_approval_status/$1/$2';
$route['admin/leave-calendar'] = 'Admin/Leave/leave_calendar';




// Employee
$route['employee/dashboard']='employee/Home';
$route['employee/apply_leave']='employee/Home/apply_leave';
$route['employee/my_leaves']='employee/Home/my_leaves';
$route['employee/compoff_leaves']='employee/Home/compoff_leaves';
$route['employee/salary_slips']='employee/Home/salary_slips';
$route['employee/expense_claims']='employee/Home/expense_claims';
$route['employee/attendance']='employee/Home/attendance';
$route['employee/changes_password']='employee/Home/changes_password';
$route['employee/changePasswordForm'] = 'employee/Home/changePasswordForm';
$route['employee/fresher_developer']='employee/Home/fresher_developer';
$route['employee/job_vacancies']='employee/Home/job_vacancies';
$route['employee/profile']='employee/Home/profile';
$route['employee/addProfileForm'] = 'employee/Home/addProfileForm';
$route['employee/logout']='employee/Home/logout';
$route['employee/apply_emp_leaves'] = 'employee/Home/apply_emp_leaves';
$route['employee/my_leaves'] = 'employee/Home/my_leaves';
$route['employee/delete_leave'] = 'employee/Home/delete_emp_leaves';
$route['employee/add_expense_claims'] = 'employee/Home/add_expense_claims';
$route['employee/delete_expense_claims'] = 'employee/Home/delete_expense_claims';
//$route['employee/print']='employee/Home/print';
// Superadmin

$route['superadmin/dashboard']='Admin/superadmin';
$route['superadmin/profile']='Admin/superadmin/profile';
$route['superadmin/addProfileForm'] = 'Admin/superadmin/addProfileForm';
$route['superadmin/changes_password']='Admin/superadmin/changes_password';
$route['superadmin/changePasswordForm'] = 'Admin/superadmin/changePasswordForm';
$route['superadmin/companies']='Admin/superadmin/companies';
$route['superadmin/it_declaration']='Admin/superadmin/it_declaration';
$route['superadmin/addITDeclaration']='Admin/superadmin/addITDeclaration';
$route['superadmin/edit_ITDeclaration/(:num)']='Admin/superadmin/edit_ITDeclaration/$1';
$route['superadmin/deleteITDeclaration/(:num)']='Admin/superadmin/deleteITDeclaration/$1';
$route['superadmin/changeStatusITDeclaration/(:num)/(:any)']='Admin/superadmin/changeStatusITDeclaration/$1/$2';
$route['superadmin/bloodgroup']='Admin/superadmin/bloodgroup';
$route['superadmin/addBloodgroup']='Admin/superadmin/addBloodgroup';
$route['superadmin/editBloodgroup/(:num)']='Admin/superadmin/editBloodgroup/$1';
$route['superadmin/deleteBloodgroup/(:num)']='Admin/superadmin/deleteBloodgroup/$1';
$route['superadmin/changeStatusBloodgroup/(:num)/(:any)']='Admin/superadmin/changeStatusBloodgroup/$1/$2';

$route['superadmin/it_section_maxLimit']='Admin/superadmin/it_section_maxLimit';
$route['superadmin/addit_section_maxLimit']='Admin/superadmin/addit_section_maxLimit';
$route['superadmin/editit_section_maxLimit/(:num)']='Admin/superadmin/editit_section_maxLimit/$1';
$route['superadmin/deleteit_section_maxLimit/(:num)']='Admin/superadmin/deleteit_section_maxLimit/$1';
$route['superadmin/changeStatusit_section_maxLimit/(:num)/(:any)']='Admin/superadmin/changeStatusit_section_maxLimit/$1/$2';

$route['superadmin/qualification']='Admin/superadmin/qualification';
$route['superadmin/addqualification']='Admin/superadmin/addqualification';
$route['superadmin/editqualification/(:num)']='Admin/superadmin/editqualification/$1';
$route['superadmin/deletequalification/(:num)']='Admin/superadmin/deletequalification/$1';
$route['superadmin/changeStatusqualification/(:num)/(:any)']='Admin/superadmin/changeStatusqualification/$1/$2';

$route['superadmin/confirmation_reason']='Admin/superadmin/confirmation_reason';
$route['superadmin/addconfirmation_reason']='Admin/superadmin/addconfirmation_reason';
$route['superadmin/editconfirmation_reason/(:num)']='Admin/superadmin/editconfirmation_reason/$1';
$route['superadmin/deleteconfirmation_reason/(:num)']='Admin/superadmin/deleteconfirmation_reason/$1';
$route['superadmin/changeStatusconfirmation_reason/(:num)/(:any)']='Admin/superadmin/changeStatusconfirmation_reason/$1/$2';

$route['superadmin/currency']='Admin/superadmin/currency';
$route['superadmin/addcurrency']='Admin/superadmin/addcurrency';
$route['superadmin/editcurrency/(:num)']='Admin/superadmin/editcurrency/$1';
$route['superadmin/deletecurrency/(:num)']='Admin/superadmin/deletecurrency/$1';
$route['superadmin/changeStatuscurrency/(:num)/(:any)']='Admin/superadmin/changeStatuscurrency/$1/$2';

$route['superadmin/hold_salary']='Admin/superadmin/hold_salary';
$route['superadmin/addhold_salary']='Admin/superadmin/addhold_salary';
$route['superadmin/edithold_salary/(:num)']='Admin/superadmin/edithold_salary/$1';
$route['superadmin/deletehold_salary/(:num)']='Admin/superadmin/deletehold_salary/$1';
$route['superadmin/changeStatushold_salary/(:num)/(:any)']='Admin/superadmin/changeStatushold_salary/$1/$2';

$route['superadmin/other_incomes']='Admin/superadmin/other_incomes';
$route['superadmin/addother_incomes']='Admin/superadmin/addother_incomes';
$route['superadmin/editother_incomes/(:num)']='Admin/superadmin/editother_incomes/$1';
$route['superadmin/deleteother_incomes/(:num)']='Admin/superadmin/deleteother_incomes/$1';
$route['superadmin/changeStatusother_incomes/(:num)/(:any)']='Admin/superadmin/changeStatusother_incomes/$1/$2';

$route['superadmin/marrital_status']='Admin/superadmin/marrital_status';
$route['superadmin/addmarrital_status']='Admin/superadmin/addmarrital_status';
$route['superadmin/editmarrital_status/(:num)']='Admin/superadmin/editmarrital_status/$1';
$route['superadmin/deletemarrital_status/(:num)']='Admin/superadmin/deletemarrital_status/$1';
$route['superadmin/changeStatusmarrital_status/(:num)/(:any)']='Admin/superadmin/changeStatusmarrital_status/$1/$2';

$route['superadmin/residential_status']='Admin/superadmin/residential_status';
$route['superadmin/addresidential_status']='Admin/superadmin/addresidential_status';
$route['superadmin/editresidential_status/(:num)']='Admin/superadmin/editresidential_status/$1';
$route['superadmin/deleteresidential_status/(:num)']='Admin/superadmin/deleteresidential_status/$1';
$route['superadmin/changeStatusresidential_status/(:num)/(:any)']='Admin/superadmin/changeStatusresidential_status/$1/$2';

$route['superadmin/vaccination_reason']='Admin/superadmin/vaccination_reason';
$route['superadmin/addvaccination_reason']='Admin/superadmin/addvaccination_reason';
$route['superadmin/editvaccination_reason/(:num)']='Admin/superadmin/editvaccination_reason/$1';
$route['superadmin/deletevaccination_reason/(:num)']='Admin/superadmin/deletevaccination_reason/$1';
$route['superadmin/changeStatusvaccination_reason/(:num)/(:any)']='Admin/superadmin/changeStatusvaccination_reason/$1/$2';

$route['superadmin/category_change_reason']='Admin/superadmin/category_change_reason';
$route['superadmin/addcategory_change_reason']='Admin/superadmin/addcategory_change_reason';
$route['superadmin/editcategory_change_reason/(:num)']='Admin/superadmin/editcategory_change_reason/$1';
$route['superadmin/deletecategory_change_reason/(:num)']='Admin/superadmin/deletecategory_change_reason/$1';
$route['superadmin/changeStatuscategory_change_reason/(:num)/(:any)']='Admin/superadmin/changeStatuscategory_change_reason/$1/$2';


$route['superadmin/qualification_level']='Admin/superadmin/qualification_level';
$route['superadmin/addQualificationLevel']='Admin/superadmin/addQualificationLevel';
$route['superadmin/editQualificationLevel/(:num)']='Admin/superadmin/editQualificationLevel/$1';
$route['superadmin/deleteQualificationLevel/(:num)']='Admin/superadmin/deleteQualificationLevel/$1';
$route['superadmin/changeStatusQualificationLevel/(:num)/(:any)']='Admin/superadmin/changeStatusQualificationLevel/$1/$2';

$route['superadmin/leaving_feedback']='Admin/superadmin/leaving_feedback';
$route['superadmin/addleaving_feedback']='Admin/superadmin/addleaving_feedback';
$route['superadmin/editleaving_feedback/(:num)']='Admin/superadmin/editleaving_feedback/$1';
$route['superadmin/deleteleaving_feedback/(:num)']='Admin/superadmin/deleteleaving_feedback/$1';
$route['superadmin/changeStatusleaving_feedback/(:num)/(:any)']='Admin/superadmin/changeStatusleaving_feedback/$1/$2';

$route['superadmin/pf_leaving_reason']='Admin/superadmin/pf_leaving_reason';
$route['superadmin/addpf_leaving_reason']='Admin/superadmin/addpf_leaving_reason';
$route['superadmin/editpf_leaving_reason/(:num)']='Admin/superadmin/editpf_leaving_reason/$1';
$route['superadmin/deletepf_leaving_reason/(:num)']='Admin/superadmin/deletepf_leaving_reason/$1';
$route['superadmin/changeStatuspf_leaving_reason/(:num)/(:any)']='Admin/superadmin/changeStatuspf_leaving_reason/$1/$2'; 

$route['superadmin/qualification_area']='Admin/superadmin/qualification_area';
$route['superadmin/addqualification_area']='Admin/superadmin/addqualification_area';
$route['superadmin/editqualification_area/(:num)']='Admin/superadmin/editqualification_area/$1';
$route['superadmin/deletequalification_area/(:num)']='Admin/superadmin/deletequalification_area/$1';
$route['superadmin/changeStatusqualification_area/(:num)/(:any)']='Admin/superadmin/changeStatusqualification_area/$1/$2'; 

$route['superadmin/project']='Admin/superadmin/project';
$route['superadmin/addproject']='Admin/superadmin/addproject';
$route['superadmin/editproject/(:num)']='Admin/superadmin/editproject/$1';
$route['superadmin/deleteproject/(:num)']='Admin/superadmin/deleteproject/$1';
$route['superadmin/changeStatusproject/(:num)/(:any)']='Admin/superadmin/changeStatusproject/$1/$2'; 

$route['superadmin/release_salary_reason']='Admin/superadmin/release_salary_reason';
$route['superadmin/addrelease_salary_reason']='Admin/superadmin/addrelease_salary_reason';
$route['superadmin/editrelease_salary_reason/(:num)']='Admin/superadmin/editrelease_salary_reason/$1';
$route['superadmin/deleterelease_salary_reason/(:num)']='Admin/superadmin/deleterelease_salary_reason/$1';
$route['superadmin/changeStatusrelease_salary_reason/(:num)/(:any)']='Admin/superadmin/changeStatusrelease_salary_reason/$1/$2';

$route['superadmin/bank']='Admin/superadmin/bank';
$route['superadmin/addBank']='Admin/superadmin/addBank';
$route['superadmin/editBank/(:num)']='Admin/superadmin/editBank/$1';
$route['superadmin/deleteBank/(:num)']='Admin/superadmin/deleteBank/$1';
$route['superadmin/changeStatusBank/(:num)/(:any)']='Admin/superadmin/changeStatusBank/$1/$2';

$route['superadmin/bankAccountType']='Admin/superadmin/bankAccountType';
$route['superadmin/addbankAccountType']='Admin/superadmin/addbankAccountType';
$route['superadmin/editbankAccountType/(:num)']='Admin/superadmin/editbankAccountType/$1';
$route['superadmin/deletebankAccountType/(:num)']='Admin/superadmin/deletebankAccountType/$1';
$route['superadmin/changeStatusbankAccountType/(:num)/(:any)']='Admin/superadmin/changeStatusbankAccountType/$1/$2';

$route['superadmin/bulletin_category']='Admin/superadmin/bulletin_category';
$route['superadmin/addbulletin_category']='Admin/superadmin/addbulletin_category';
$route['superadmin/editbulletin_category/(:num)']='Admin/superadmin/editbulletin_category/$1';
$route['superadmin/deletebulletin_category/(:num)']='Admin/superadmin/deletebulletin_category/$1';
$route['superadmin/changeStatusbulletin_category/(:num)/(:any)']='Admin/superadmin/changeStatusbulletin_category/$1/$2';

$route['superadmin/country']='Admin/superadmin/country';
$route['superadmin/addcountry']='Admin/superadmin/addcountry';
$route['superadmin/editcountry/(:num)']='Admin/superadmin/editcountry/$1';
$route['superadmin/deletecountry/(:num)']='Admin/superadmin/deletecountry/$1';
$route['superadmin/changeStatuscountry/(:num)/(:any)']='Admin/superadmin/changeStatuscountry/$1/$2';

$route['superadmin/empDocCategory']='Admin/superadmin/empDocCategory';
$route['superadmin/addempDocCategory']='Admin/superadmin/addempDocCategory';
$route['superadmin/editempDocCategory/(:num)']='Admin/superadmin/editempDocCategory/$1';
$route['superadmin/deleteempDocCategory/(:num)']='Admin/superadmin/deleteempDocCategory/$1';
$route['superadmin/changeStatusempDocCategory/(:num)/(:any)']='Admin/superadmin/changeStatusempDocCategory/$1/$2';

$route['superadmin/empStatus']='Admin/superadmin/empStatus';
$route['superadmin/addempStatus']='Admin/superadmin/addempStatus';
$route['superadmin/editempStatus/(:num)']='Admin/superadmin/editempStatus/$1';
$route['superadmin/deleteempStatus/(:num)']='Admin/superadmin/deleteempStatus/$1';
$route['superadmin/changeStatusempStatus/(:num)/(:any)']='Admin/superadmin/changeStatusempStatus/$1/$2';

$route['superadmin/empResignationReason']='Admin/superadmin/empResignationReason';
$route['superadmin/addempResignationReason']='Admin/superadmin/addempResignationReason';
$route['superadmin/editempResignationReason/(:num)']='Admin/superadmin/editempResignationReason/$1';
$route['superadmin/deleteempResignationReason/(:num)']='Admin/superadmin/deleteempResignationReason/$1';
$route['superadmin/changeStatusempResignationReason/(:num)/(:any)']='Admin/superadmin/changeStatusempResignationReason/$1/$2';

$route['superadmin/formsCategory']='Admin/superadmin/formsCategory';
$route['superadmin/addformsCategory']='Admin/superadmin/addformsCategory';
$route['superadmin/editformsCategory/(:num)']='Admin/superadmin/editformsCategory/$1';
$route['superadmin/deleteformsCategory/(:num)']='Admin/superadmin/deleteformsCategory/$1';
$route['superadmin/changeStatusformsCategory/(:num)/(:any)']='Admin/superadmin/changeStatusformsCategory/$1/$2';

$route['superadmin/pfSchemes']='Admin/superadmin/pfSchemes';
$route['superadmin/addpfSchemes']='Admin/superadmin/addpfSchemes';
$route['superadmin/editpfSchemes/(:num)']='Admin/superadmin/editpfSchemes/$1';
$route['superadmin/deletepfSchemes/(:num)']='Admin/superadmin/deletepfSchemes/$1';
$route['superadmin/changeStatuspfSchemes/(:num)/(:any)']='Admin/superadmin/changeStatuspfSchemes/$1/$2';

$route['superadmin/inVoluntaryReasons']='Admin/superadmin/inVoluntaryReasons';
$route['superadmin/addinVoluntaryReasons']='Admin/superadmin/addinVoluntaryReasons';
$route['superadmin/editinVoluntaryReasons/(:num)']='Admin/superadmin/editinVoluntaryReasons/$1';
$route['superadmin/deleteinVoluntaryReasons/(:num)']='Admin/superadmin/deleteinVoluntaryReasons/$1';
$route['superadmin/changeStatusinVoluntaryReasons/(:num)/(:any)']='Admin/superadmin/changeStatusinVoluntaryReasons/$1/$2';

$route['superadmin/nationality']='Admin/superadmin/nationality';
$route['superadmin/addnationality']='Admin/superadmin/addnationality';
$route['superadmin/editnationality/(:num)']='Admin/superadmin/editnationality/$1';
$route['superadmin/deletenationality/(:num)']='Admin/superadmin/deletenationality/$1';
$route['superadmin/changeStatusnationality/(:num)/(:any)']='Admin/superadmin/changeStatusnationality/$1/$2';

$route['superadmin/relation']='Admin/superadmin/relation';
$route['superadmin/addrelation']='Admin/superadmin/addrelation';
$route['superadmin/editrelation/(:num)']='Admin/superadmin/editrelation/$1';
$route['superadmin/deleterelation/(:num)']='Admin/superadmin/deleterelation/$1';
$route['superadmin/changeStatusrelation/(:num)/(:any)']='Admin/superadmin/changeStatusrelation/$1/$2';

$route['superadmin/religion']='Admin/superadmin/religion';
$route['superadmin/addreligion']='Admin/superadmin/addreligion';
$route['superadmin/editreligion/(:num)']='Admin/superadmin/editreligion/$1';
$route['superadmin/deletereligion/(:num)']='Admin/superadmin/deletereligion/$1';
$route['superadmin/changeStatusreligion/(:num)/(:any)']='Admin/superadmin/changeStatusreligion/$1/$2';

$route['superadmin/exemptionGroupMap']='Admin/superadmin/exemptionGroupMap';
$route['superadmin/addexemptionGroupMap']='Admin/superadmin/addexemptionGroupMap';
$route['superadmin/editexemptionGroupMap/(:num)']='Admin/superadmin/editexemptionGroupMap/$1';
$route['superadmin/deleteexemptionGroupMap/(:num)']='Admin/superadmin/deleteexemptionGroupMap/$1';
$route['superadmin/changeStatusexemptionGroupMap/(:num)/(:any)']='Admin/superadmin/changeStatusexemptionGroupMap/$1/$2';

$route['superadmin/tax_slabs']='Admin/superadmin/tax_slabs';
$route['superadmin/addtax_slabs']='Admin/superadmin/addtax_slabs';
$route['superadmin/edittax_slabs/(:num)']='Admin/superadmin/edittax_slabs/$1';
$route['superadmin/deletetax_slabs/(:num)']='Admin/superadmin/deletetax_slabs/$1';
$route['superadmin/changeStatustax_slabs/(:num)/(:any)']='Admin/superadmin/changeStatustax_slabs/$1/$2';

$route['superadmin/profession_tax_slabs']='Admin/superadmin/profession_tax_slabs';
$route['superadmin/addprofession_tax_slabs']='Admin/superadmin/addprofession_tax_slabs';
$route['superadmin/editprofession_tax_slabs/(:num)']='Admin/superadmin/editprofession_tax_slabs/$1';
$route['superadmin/deleteprofession_tax_slabs/(:num)']='Admin/superadmin/deleteprofession_tax_slabs/$1';
$route['superadmin/changeStatusprofession_tax_slabs/(:num)/(:any)']='Admin/superadmin/changeStatusprofession_tax_slabs/$1/$2';

$route['superadmin/leave_type']='Admin/superadmin/leave_type';
$route['superadmin/addleave_type']='Admin/superadmin/addleave_type';
$route['superadmin/editleave_type/(:num)']='Admin/superadmin/editleave_type/$1';
$route['superadmin/deleteleave_type/(:num)']='Admin/superadmin/deleteleave_type/$1';
$route['superadmin/changeStatusleave_type/(:num)/(:any)']='Admin/superadmin/changeStatusleave_type/$1/$2';

$route['superadmin/leave_rules']='Admin/superadmin/leave_rules';
$route['superadmin/addleave_rules']='Admin/superadmin/addleave_rules';
$route['superadmin/editleave_rules/(:num)']='Admin/superadmin/editleave_rules/$1';
$route['superadmin/deleteleave_rules/(:num)']='Admin/superadmin/deleteleave_rules/$1';
$route['superadmin/changeStatusleave_rules/(:num)/(:any)']='Admin/superadmin/changeStatusleave_rules/$1/$2';

$route['superadmin/leave_reason']='Admin/superadmin/leave_reason';
$route['superadmin/addleave_reason']='Admin/superadmin/addleave_reason';
$route['superadmin/editleave_reason/(:num)']='Admin/superadmin/editleave_reason/$1';
$route['superadmin/deleteleave_reason/(:num)']='Admin/superadmin/deleteleave_reason/$1';
$route['superadmin/changeStatusleave_reason/(:num)/(:any)']='Admin/superadmin/changeStatusleave_reason/$1/$2';

$route['superadmin/weekend_policy']='Admin/superadmin/weekend_policy';
$route['superadmin/addweekend_policy']='Admin/superadmin/addweekend_policy';
$route['superadmin/editweekend_policy/(:num)']='Admin/superadmin/editweekend_policy/$1';
$route['superadmin/deleteweekend_policy/(:num)']='Admin/superadmin/deleteweekend_policy/$1';
$route['superadmin/changeStatusweekend_policy/(:num)/(:any)']='Admin/superadmin/changeStatusweekend_policy/$1/$2';

$route['superadmin/leave_scheme']='Admin/superadmin/leave_scheme';
$route['superadmin/addleave_scheme']='Admin/superadmin/addleave_scheme';
$route['superadmin/editleave_scheme/(:num)']='Admin/superadmin/editleave_scheme/$1';
$route['superadmin/deleteleave_scheme/(:num)']='Admin/superadmin/deleteleave_scheme/$1';
$route['superadmin/changeStatusleave_scheme/(:num)/(:any)']='Admin/superadmin/changeStatusleave_scheme/$1/$2';

$route['superadmin/contact_requests']='Admin/superadmin/contact_requests';
$route['superadmin/subscription_plans']='Admin/superadmin/subscription_plans';
$route['superadmin/subscription_plans/(:num)']='Admin/superadmin/subscription_plans/$1';
$route['superadmin/addNewPlans']='Admin/superadmin/addNewPlans';
$route['superadmin/editNewPlans/(:any)']='Admin/superadmin/editNewPlans/$1';
$route['superadmin/invoices']='Admin/superadmin/invoices';
$route['superadmin/superadmin_users']='Admin/superadmin/superadmin_users';
$route['superadmin/add_admin_user']='Admin/superadmin/add_admin_user';
$route['superadmin/edit_admin_user/(:any)']='Admin/superadmin/edit_admin_user/$1';
$route['superadmin/pages']='Admin/superadmin/pages';
$route['superadmin/faq_categories']='Admin/superadmin/faq_categories';
$route['superadmin/addfaqCategories']='Admin/superadmin/addfaqCategories';
$route['superadmin/editfaqCategories/(:any)']='Admin/superadmin/editfaqCategories/$1';
$route['superadmin/deletefaq_category/(:any)']='Admin/superadmin/deletefaq_category/$1';
$route['superadmin/faq']='Admin/superadmin/faq';
$route['superadmin/addfaq']='Admin/superadmin/addfaq';
$route['superadmin/editfaq/(:any)']='Admin/superadmin/editfaq/$1';
$route['superadmin/deletefaq/(:any)']='Admin/superadmin/deletefaq/$1';
$route['superadmin/features']='Admin/superadmin/features';
$route['superadmin/edit']='Admin/superadmin/edit';
$route['superadmin/editGeneralSettings']='Admin/superadmin/editGeneralSettings';
$route['superadmin/edit_payment_settings']='Admin/superadmin/edit_payment_settings';
$route['superadmin/email_templates']='Admin/superadmin/email_templates';
$route['superadmin/email_templates/(:num)']='Admin/superadmin/email_templates/$1';
$route['superadmin/editemailtemplate/(:any)']='Admin/superadmin/editemailtemplate/$1';
$route['superadmin/stripe_settings']='Admin/superadmin/stripe_settings';
$route['superadmin/language']='Admin/superadmin/language';
$route['superadmin/language/(:any)']='Admin/superadmin/language/$1';
$route['superadmin/addLanguage']='Admin/superadmin/addLanguage';
$route['superadmin/editLanguages/(:any)']='Admin/superadmin/editLanguages/$1';
$route['superadmin/deleteLanguage/(:any)']='Admin/superadmin/deleteLanguage/$1';
$route['superadmin/update_new_version']='Admin/superadmin/update_new_version';
$route['superadmin/smtp_settings']='Admin/superadmin/smtp_settings';
$route['superadmin/custom_modules']='Admin/superadmin/custom_modules';
$route['superadmin/google_captcha']='Admin/superadmin/google_captcha';
$route['superadmin/addCompanies']='Admin/superadmin/addCompanies';
$route['superadmin/editCompanies/(:any)']='Admin/superadmin/editCompanies/$1';
$route['superadmin/changePackage']='Admin/superadmin/changePackage';
$route['superadmin/deleteCompany/(:any)']='Admin/superadmin/deleteCompany/$1';
$route['superadmin/changeStatusCompany/(:any)/(:num)'] = 'Admin/superadmin/changeStatusCompany/$1/$2';

