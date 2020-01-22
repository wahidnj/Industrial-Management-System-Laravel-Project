<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/abc', function () {
    return view('test');
});

//Route::get('/login', 'LoginController@index');
//Route::get('/login', ['as'=>'login.index','uses'=>'LoginController@index']);


Route::get('/login/log', 'LoginController@log')->name('login.log');
Route::post('/login/log', 'LoginController@logVerify');
// Route::post('/login/log', ['uses'=>'LoginController@verify']);
 Route::group(['middleware'=>['sess']], function(){

   //admin

   Route::get('/admin', 'AdminController@index')->name('admin.index');
	Route::get('/admin/profile', 'AdminController@profile')->name('admin.profile');


	Route::get('/admin/client', 'AdminController@clientList')->name('admin.client');
	Route::get('/admin/edit_client/{cid}', 'AdminController@editClient')->name('admin.edit_client');
	Route::post('/admin/edit_client/{cid}', 'AdminController@updateClient');
	Route::get('/admin/add_client', 'AdminController@addClient')->name('admin.add_client');
	Route::post('/admin/add_client', 'AdminController@createClient');
	Route::get('/admin/delete_client/{cid}', 'AdminController@destroyClient')->name('admin.delete_client');
	Route::post('/admin/delete_client/{cid}', 'AdminController@destroyClient');	


	Route::get('/admin/employee', 'AdminController@employeeList')->name('admin.employee');
	Route::get('/admin/edit_employee/{eid}', 'AdminController@editEmployee')->name('admin.edit_employee');
	Route::post('/admin/edit_employee/{eid}', 'AdminController@updateEmployee');
	Route::get('/admin/add_employee', 'AdminController@addEmployee')->name('admin.add_employee');
	Route::post('/admin/add_employee', 'AdminController@createEmployee');
	Route::get('/admin/delete_employee/{sid}', 'AdminController@deleteEmployee')->name('admin.delete_employee');
	Route::post('/admin/delete_employee/{sid}', 'AdminController@destroyEmployee');	


	Route::get('/admin/labour', 'AdminController@labourList')->name('admin.labour');
	Route::get('/admin/edit_labour/{lid}', 'AdminController@editLabour')->name('admin.edit_labour');
	Route::post('/admin/edit_labour/{lid}', 'AdminController@updateLabour');
	Route::get('/admin/delete_labour/{lid}', 'AdminController@deleteLabour')->name('admin.delete_labour');
	Route::post('/admin/delete_labour/{lid}', 'AdminController@destroyLabour');
	

	Route::get('/admin/supplier', 'AdminController@supplierList')->name('admin.supplier');
	Route::get('/admin/edit_supplier/{sid}', 'AdminController@editSupplier')->name('admin.edit_supplier');
	Route::post('/admin/edit_supplier/{sid}', 'AdminController@updateSupplier');
	Route::get('/admin/delete_supplier/{sid}', 'AdminController@deleteSupplier')->name('admin.delete_supplier');
	Route::post('/admin/delete_supplier/{sid}', 'AdminController@destroySupplier');	


	Route::get('/admin/project', 'AdminController@projectList')->name('admin.project');
	Route::get('/admin/edit_project/{pid}', 'AdminController@editProject')->name('admin.edit_project');
	Route::post('/admin/edit_project/{pid}', 'AdminController@updateProject');
	Route::get('/admin/add_project', 'AdminController@addProject')->name('admin.add_project');
	Route::post('/admin/add_project', 'AdminController@createProject');
	Route::get('/admin/delete_project/{pid}', 'AdminController@destroyProject')->name('admin.delete_project');
	Route::post('/admin/delete_project/{pid}', 'AdminController@destroyProject');	


	Route::get('/admin/expense', 'AdminController@expenseList')->name('admin.expense');
	Route::get('/admin/edit_expense/{sid}', 'AdminController@editExpense')->name('admin.edit_expense');
	Route::post('/admin/edit_expense/{sid}', 'AdminController@updateExpense');
	Route::get('/admin/add_expense', 'AdminController@addExpense')->name('admin.add_expense');
	Route::post('/admin/add_expense', 'AdminController@createExpense');
	Route::get('/admin/delete_expense/{sid}', 'AdminController@deleteExpense')->name('admin.delete_expense');
	Route::post('/admin/delete_expense/{sid}', 'AdminController@destroyExpense');

	Route::get('/admin/bonus', 'AdminController@show_Bonus')->name('admin.bonus');
	Route::get('/admin/delete_bonus/{sno}', 'AdminController@delete_bonus')->name('admin.delete_bonus');
	Route::post('/admin/delete_bonus/{sno}', 'AdminController@destroy_bonus');

	///manager

	Route::get('/manager', 'managerController@index')->name('manager.index');
    
    Route::get('/manager/profile', 'managerController@viewProfile')->name('manager.profile');

	Route::get('/manager/client', 'managerController@clientList')->name('manager.clientList');
	Route::get('/manager/edit_client/{cid}', 'managerController@editClient')->name('manager.edit_client');
	Route::post('/manager/edit_client/{cid}', 'managerController@updateClient');
	Route::get('/manager/add_client', 'managerController@addClient')->name('manager.add_client');
	Route::post('/manager/add_client', 'managerController@createClient');
	Route::get('/manager/delete_client/{cid}', 'managerController@deleteClient')->name('manager.delete_client');
	Route::post('/manager/delete_client/{cid}', 'managerController@destroyClient');	


	Route::get('/manager/employee', 'managerController@employeeList')->name('manager.employeeList');
	Route::get('/manager/edit_employee/{eid}', 'managerController@editEmployee')->name('manager.edit_employee');
	Route::post('/manager/edit_employee/{eid}', 'managerController@updateEmployee');
	Route::get('/manager/add_employee', 'managerController@addEmployee')->name('manager.add_employee');
	Route::post('/manager/add_employee', 'managerController@createEmployee');
	Route::get('/manager/delete_employee/{sid}', 'managerController@deleteEmployee')->name('manager.delete_employee');
	Route::post('/manager/delete_employee/{sid}', 'managerController@destroyEmployee');	

	Route::get('/manager/labour', 'managerController@labourList')->name('manager.labourList');
	

	Route::get('/manager/supplier', 'managerController@supplierList')->name('manager.supplierList');
	Route::get('/manager/edit_supplier/{sid}', 'managerController@editSupplier')->name('manager.edit_supplier');
	Route::post('/manager/edit_supplier/{sid}', 'managerController@updateSupplier');
	Route::get('/manager/add_supplier', 'managerController@addSupplier')->name('manager.add_supplier');
	Route::post('/manager/add_supplier', 'managerController@createSupplier');
	Route::get('/manager/delete_supplier/{sid}', 'managerController@deleteSupplier')->name('manager.delete_supplier');
	Route::post('/manager/delete_supplier/{sid}', 'managerController@destroySupplier');	

	Route::get('/manager/project', 'managerController@projectList')->name('manager.projectList');
	Route::get('/manager/edit_project/{pid}', 'managerController@editProject')->name('manager.edit_project');
	Route::post('/manager/edit_project/{pid}', 'managerController@updateProject');
	Route::get('/manager/add_project', 'managerController@addProject')->name('manager.add_project');
	Route::post('/manager/add_project', 'managerController@createProject');
	Route::get('/manager/delete_project/{pid}', 'managerController@deleteProject')->name('manager.delete_project');
	Route::post('/manager/delete_project/{pid}', 'managerController@destroyProject');	

	Route::get('/manager/expense', 'managerController@expenseList')->name('manager.expenseList');
	// Route::get('/manager/edit_expense/{sid}', 'managerController@editExpense')->name('manager.edit_expense');
	// Route::post('/manager/edit_expense/{sid}', 'managerController@updateExpense');
	// Route::get('/manager/add_expense', 'managerController@addExpense')->name('manager.add_expense');
	// Route::post('/manager/add_expense', 'managerController@createExpense');
	// Route::get('/manager/delete_expense/{sid}', 'managerController@deleteExpense')->name('manager.delete_expense');
	// Route::post('/manager/delete_expense/{sid}', 'managerController@destroyExpense');	

    Route::get('/manager/bonus', 'managerController@bonusList')->name('manager.bonusList');
    Route::get('/manager/edit_bonus/{serialno}', 'managerController@editBonus')->name('manager.edit_bonus');
	Route::post('/manager/edit_bonus/{serialno}', 'managerController@updateBonus');
	Route::get('/manager/reject_bonus/{serialno}', 'managerController@rejectBonus')->name('manager.reject_bonus');
	Route::post('/manager/reject_bonus/{serialno}', 'managerController@updaterejectBonus');

	Route::get('/manager/soldHistory', 'managerController@soldHistory')->name('manager.soldList');
    Route::get('/manager/edit_bonus/{serialno}', 'managerController@editBonus')->name('manager.edit_bonus');
	Route::post('/manager/edit_bonus/{serialno}', 'managerController@updateBonus');
	Route::get('/manager/reject_bonus/{serialno}', 'managerController@rejectBonus')->name('manager.reject_bonus');
	Route::post('/manager/reject_bonus/{serialno}', 'managerController@updaterejectBonus');

	Route::get('/manager/report', 'managerController@viewReport')->name('manager.reportList');
	Route::post('/manager/report', 'managerController@viewReport');
    

	/////accountant


	Route::get('/accountant', 'accountantController@index')->name('accountant.index');

	Route::get('/accountant/projects', 'accountantController@projects')->name('accountant.projects');



	Route::get('/accountant/employee', 'accountantController@index_employee')->name('accountant.employee');


	Route::get('/accountant/employee_bonus/{eid}', 'accountantController@edit_bonus')->name('accountant.employee_bonus');
	Route::post('/accountant/employee_bonus/{eid}', 'accountantController@bonus_reqeust');
	
	 Route::get('/accountant/bonus', 'accountantController@show_Bonus')->name('accountant.bonus');
	Route::get('/accountant/delete_bonus/{sno}', 'accountantController@delete_bonus')->name('accountant.delete_bonus');
	Route::post('/accountant/delete_bonus/{sno}', 'accountantController@destroy_bonus');	

	Route::get('/accountant/labour', 'accountantController@index_labour')->name('accountant.labour');
	Route::get('/accountant/edit_labour/{lid}', 'accountantController@edit_labour')->name('accountant.edit_labour');
	Route::post('/accountant/edit_labour/{lid}', 'accountantController@update_labour');
	Route::get('/accountant/add_labour', 'accountantController@add_labour')->name('accountant.add_labour');
	Route::post('/accountant/add_labour', 'accountantController@create_labour');
	Route::get('/accountant/delete_labour/{lid}', 'accountantController@delete_labour')->name('accountant.delete_labour');
	Route::post('/accountant/delete_labour/{lid}', 'accountantController@destroy_labour');	

	Route::get('/accountant/supplier', 'accountantController@index_supplier')->name('accountant.supplier');
	Route::get('/accountant/edit_supplier/{sid}', 'accountantController@edit_supplier')->name('accountant.edit_supplier');
	Route::post('/accountant/edit_supplier/{sid}', 'accountantController@update_supplier');
	

	Route::get('/accountant/project', 'accountantController@index_project')->name('accountant.project');
	Route::get('/accountant/edit_project/{pid}', 'accountantController@edit_project')->name('accountant.edit_project');
	Route::post('/accountant/edit_project/{pid}', 'accountantController@update_project');
		

	Route::get('/accountant/expense', 'accountantController@index_expense')->name('accountant.expense');
	Route::get('/accountant/edit_expense/{eid}', 'accountantController@edit_expense')->name('accountant.edit_expense');
	Route::post('/accountant/edit_expense/{eid}', 'accountantController@update_expense');
	Route::get('/accountant/add_expense', 'accountantController@add_expense')->name('accountant.add_expense');
	Route::post('/accountant/add_expense', 'accountantController@create_expense');
	Route::get('/accountant/delete_expense/{eid}', 'accountantController@delete_expense')->name('accountant.delete_expense');
	Route::post('/accountant/delete_expense/{eid}', 'accountantController@destroy_expense');



 });



Route::get('/logout', 'logoutController@index');

//Route::resource('accounts', 'AccountController');




                  