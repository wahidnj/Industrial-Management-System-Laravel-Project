<?php

namespace App\Http\Controllers;

use App\Users;
use App\Clients;
use App\Expenses;
use App\Labours;
use App\Suppliers;
use App\Projects;
use App\Bonus;

use Illuminate\Http\Request;
use Validator;
use App\Http\Requests\EmployeeRequest;
use App\Http\Requests\ClientRequest;
use App\Http\Requests\SupplierRequest;
use App\Http\Requests\ProjectRequest;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{   
   public function index()
    {
        $user = DB::table('projects')->count();
        $tcost = DB::table('projects')->sum('tcost');
        $paid = DB::table('projects')->sum('paid');
        $t_emp = DB::table('users')->count();
        $t_expense = DB::table('expenses')->sum('amount');
        $t_sup = DB::table('suppliers')->count();
        $t_client = DB::table('clients')->count();
        $t_labour = DB::table('labours')->count();
       return view('admin.index', compact(['user' , 'tcost' , 'paid' ,'t_emp', 't_expense', 't_sup', 't_client', 't_labour'] ) );
    }


    public function profile()
    {
       $user = Users::find(5);
        return view('admin.profile', ['user'=>$user]);
    }
    
     public function addEmployee(){
        return view('admin.add_employee');
    }

    public function createEmployee(EmployeeRequest $req)
    {
        //

        $users = new Users();
     
        $users->email = $req->email;
        $users->password = $req->password;
        $users->ename = $req->ename;
        $users->address = $req->address;
        $users->contact = $req->contact;
        $users->type = $req->type;
        $users->esalary = $req->esalary;
   
        
        $users->save();

        //$data = User::where('uname', $req->uname)->where('password', $req->password)->get();
        return redirect()->route('admin.employee');
    }



    public function employeeList()
    {

         $userList = Users::all();

       
        return view('admin.employee', ['user'=> $userList]);
   
    }

    public function editEmployee($eid){

        $user = Users::find($eid);
        return view('admin.edit_employee', ['user'=>$user]);
    }

    public function updateEmployee(Request $req, $eid){

        $user = Users::find($eid);

        $user->email = $req->email;
        $user->ename = $req->ename;
        $user->contact = $req->contact;
        $user->address = $req->address;
        $user->esalary = $req->esalary;
        
   
        $user->save();

        return redirect()->route('admin.employee');
    }

    public function deleteEmployee($eid){

        $user = Users::find($eid);
        return view('admin.delete_employee', ['user'=>$user]);
    }

    public function destroyEmployee($eid){

        Users::destroy($eid);
        return redirect()->route('admin.employee');
    }



    public function addClient(){
        return view('admin.add_client');
    }

    public function createClient(ClientRequest $req)
    {
        //

        $clients = new Clients();
     
        $clients->cname = $req->cname;
        $clients->cowner = $req->cowner;
        $clients->address = $req->address;
        $clients->contact = $req->contact;
        $clients->details = $req->details;
        $clients->balance = 0;
   
        
        $clients->save();

        //$data = User::where('uname', $req->uname)->where('password', $req->password)->get();
        return redirect()->route('admin.client');
    }


    public function clientList()
    {

         $clientList = Clients::all();
         
       return view('admin.client',['client'=> $clientList]);
    }

    public function editClient($cid){
        
        $client = Clients::find($cid);

        return view('admin.edit_client', ['client'=>$client]);
    }

    public function updateClient(Request $req, $cid){

        $client = Clients::find($cid);

        $client->cname = $req->cname;
        $client->cowner = $req->cowner;
        $client->address = $req->address;
        $client->contact = $req->contact;
        
   
        $client->save();

        return redirect()->route('admin.clientList');
    }

    public function deleteClient($cid){

        $client = Clients::find($cid);
        return view('admin.delete_client', ['client'=>$client]);
    }

    public function destroyClient($cid){

        Clients::destroy($cid);
        return redirect()->route('admin.clientList');
    }


     public function addExpense(){
        return view('admin.add_expense');
    }

    public function createExpense(Request $req)
    {
        //

         $expense = new Expenses();
        $expense->purpose = $req->purpose;
        $expense->details = $req->details;
        $expense->amount = $req->expenseAmount;

        $expense->edate = date('Y-m-d H:i:s');
       
        $expense->save();
        return redirect()->route('admin.expense');
    }



    public function expenseList()
    {

         $userList = Expenses::all();

       
        return view('admin.expense', ['expense'=> $userList]);
   
    }

    

     public function addLabour(){
        return view('admin.add_labour');
    }


    public function labourList()
    {

         $userList = Labours::all();

       
        return view('admin.labour', ['labour'=> $userList]);
   
    }

    public function editLabour($lid){

        $user = Labours::find($lid);
        return view('admin.edit_labour', ['labour'=>$user]);
    }

    public function updateLabour(Request $req, $lid){

         $labour = labours::find($lid);

        $labour->lname = $req->labourName;
        $labour->laddress = $req->labourAddress;
        $labour->lcontact = $req->labourContact;
        $labour->expertise = $req->labourExperties;
        $labour->salary = $req->labourSalary;
        $labour->save();

        return redirect()->route('admin.labour');
    }

    public function deleteLabour($lid){

        $user = labours::find($lid);
        return view('admin.delete_labour', ['labour'=>$user]);
    }

    public function destroyLabour($lid){

        labours::destroy($lid);
        return redirect()->route('admin.labour');
    }


    



    public function supplierList()
    {

         $list = Suppliers::all();
        return view('admin.supplier', ['supplier'=> $list]);
   
    }

    public function editSupplier($sid){

        $supplier = Suppliers::find($sid);
        return view('admin.edit_supplier', ['supplier'=>$supplier]);
    }

    public function updateSupplier(Request $req, $sid){

         $supplier = Suppliers::find($sid);

        $supplier->sname = $req->sname;
        $supplier->cowner = $req->cowner;
        $supplier->address = $req->address;
        $supplier->contact = $req->contact;
        
   
        $supplier->save();

        return redirect()->route('admin.supplier');
    }

    public function deleteSupplier($eid){

        $supplier = Suppliers::find($sid);
        return view('admin.delete_supplier', ['supplier'=>$supplier]);
    }

    public function destroySupplier($eid){

         Suppliers::destroy($sid);
        return redirect()->route('admin.supplier');
    }



     



    public function projectList()
    {

         $userList = Projects::all();

       
        return view('admin.project', ['user'=> $userList]);
   
    }

    public function editProject($pid){

        $user = Projects::find($pid);
        return view('admin.edit_project', ['user'=>$user]);
    }

    public function updateProject(Request $req, $pid){

        $user = Projects::find($pid);

        $user->pname = $req->pname;
        $user->client = $req->client;
        $user->tcost = $req->tcost;
        $user->paid = $req->paid;
        $user->ecost = $req->ecost;
        $user->details = $req->details;
        $user->status = $req->status;
        
   
        $user->save();

        return redirect()->route('admin.project');
    }

    public function deleteProject($pid){

        $user = Projects::find($pid);
        return view('admin.delete_project', ['user'=>$user]);
    }

    public function destroyProject($pid){

        Projects::destroy($pid);
        return redirect()->route('admin.project');
    }

     public function show_Bonus()
    {
        $bonusList = bonus::all();
        return view('admin.bonus', ['emp'=> $bonusList]);
    }
    
     public function delete_bonus($sno){

        $employee = bonus::find($sno);
        return view('admin.delete_bonus', ['emp'=>$employee]);
    }

    public function destroy_bonus($sno){

        bonus::destroy($sno);
        return redirect()->route('admin.bonus');
    }
   
}
