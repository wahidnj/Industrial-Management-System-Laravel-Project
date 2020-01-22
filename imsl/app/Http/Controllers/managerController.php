<?php

namespace App\Http\Controllers;


use App\Users;
use App\Clients;
use App\Suppliers;
use App\Projects;
use App\Labours;
use App\Expenses;
use App\Bonus;
use App\SoldHistory;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Validator;
use App\Http\Requests\EmployeeRequest;
use App\Http\Requests\ClientRequest;
use App\Http\Requests\SupplierRequest;
use App\Http\Requests\ProjectRequest;

class managerController extends Controller


{
    //

    public function index()
    {
       $count = Projects::count();
       $completed = Projects::where('status','=','completed')->count();
       $profit=DB::table('sold')->sum('profit');




        //$profit=$profit[0]->profit;
       // $total = $data->count();
       return view('manager.index', compact(['count', 'completed', 'profit']));
    }

    public function viewProfile()
    {
        //$user = Users::find(session('user'));

         //$user = Users::where('ename', session('user'))->get();

       return view('manager.profile');
    }



    public function addClient(){
        return view('manager.add_client');
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
        return redirect()->route('manager.clientList');
    }


    public function clientList()
    {

    	 $clientList = Clients::all();
         
       return view('manager.client',['client'=> $clientList]);
    }

    public function editClient($cid){
        
        $client = Clients::find($cid);

        return view('manager.edit_client', ['client'=>$client]);
    }

    public function updateClient(Request $req, $cid){

        $client = Clients::find($cid);

        $client->cname = $req->cname;
        $client->cowner = $req->cowner;
        $client->address = $req->address;
        $client->contact = $req->contact;
        
   
        $client->save();

        return redirect()->route('manager.clientList');
    }

    public function deleteClient($cid){

        $client = Clients::find($cid);
        return view('manager.delete_client', ['client'=>$client]);
    }

    public function destroyClient($cid){

        Clients::destroy($cid);
        return redirect()->route('manager.clientList');
    }


    public function addEmployee(){
        return view('manager.add_employee');
    }

    public function createEmployee(EmployeeRequest $req)
    {
        //

        $users = new Users();
     
        $users->ename = $req->ename;
        $users->email = $req->email;
        $users->password = $req->password;
        $users->address = $req->address;
        $users->contact = $req->contact;
        $users->type = $req->type;
        $users->esalary = $req->esalary;
   
        
        $users->save();

        //$data = User::where('uname', $req->uname)->where('password', $req->password)->get();
        return redirect()->route('manager.employeeList');
    }


    public function employeeList()
    {

    	 //$userList = Users::all();

       
         //$userList = Users::where('type','!=', "admin")->orderBy('eid', 'desc')->get();
         $userList = Users::where('type','!=', "admin")->get();
          return view('manager.employee', ['user'=> $userList]);
   
    }

    public function editEmployee($eid){

        $user = Users::find($eid);
        return view('manager.edit_employee', ['user'=>$user]);
    }

    public function updateEmployee(Request $req, $eid){

        $user = Users::find($eid);

        $user->email = $req->email;
        $user->ename = $req->ename;
        $user->contact = $req->contact;
        $user->address = $req->address;
        $user->esalary = $req->esalary;
        
   
        $user->save();

        return redirect()->route('manager.employeeList');
    }

    public function deleteEmployee($eid){

        $user = Users::find($eid);
        return view('manager.delete_employee', ['user'=>$user]);
    }

    public function destroyEmployee($eid){

        Users::destroy($eid);
        return redirect()->route('manager.employeeList');
    }

    public function labourList()
    {
       $labourlist = Labours::all();

       return view('manager.labour', ['labour'=> $labourlist]);
    }

    public function addSupplier(){
        return view('manager.add_supplier');
    }

    public function createSupplier(SupplierRequest $req)
    {
       

        $suppliers = new Suppliers();
     
        $suppliers->sname = $req->sname;
        $suppliers->cowner = $req->cowner;
        $suppliers->address = $req->address;
        $suppliers->contact = $req->contact;
        $suppliers->details = $req->details;
        $suppliers->tbuy = 0;
        $suppliers->balance = 0;
        
        $suppliers->save();

        //$data = User::where('uname', $req->uname)->where('password', $req->password)->get();
        return redirect()->route('manager.supplierList');
    }


    public function supplierList()
    {
        $supplierList = Suppliers::all();
        return view('manager.supplier', ['supplier'=> $supplierList]);
    }

    public function editSupplier($sid){

        $supplier = Suppliers::find($sid);
        return view('manager.edit_supplier', ['supplier'=>$supplier]);
    }

    public function updateSupplier(Request $req, $sid){

        $supplier = Suppliers::find($sid);

        $supplier->sname = $req->sname;
        $supplier->cowner = $req->cowner;
        $supplier->address = $req->address;
        $supplier->contact = $req->contact;
        
   
        $supplier->save();

        return redirect()->route('manager.supplierList');
    }

    public function deleteSupplier($sid){

        $supplier = Suppliers::find($sid);
        return view('manager.delete_supplier', ['supplier'=>$supplier]);
    }

    public function destroySupplier($sid){

        Suppliers::destroy($sid);
        return redirect()->route('manager.supplierList');
    }


    public function addProject(){
        return view('manager.add_project');
    }

    public function createProject(ProjectRequest $req)
    {
        //

       $projects = new Projects();
     
        $projects->pname = $req->pname;
        $projects->client = $req->client;
        
        $projects->tcost = $req->tcost;
        $projects->paid = $req->paid;
        $projects->ecost = $req->ecost;
        $projects->details = $req->details;
        $projects->status = "running";
        
        
        $projects->save();

        //$data = User::where('uname', $req->uname)->where('password', $req->password)->get();
        return redirect()->route('manager.projectList');
    }


    public function projectList()
    {
        $projectList = Projects::all();
        return view('manager.project', ['project'=> $projectList]);
    }

    public function editProject($pid){

        $project = Projects::find($pid);
        return view('manager.edit_project', ['project'=>$project]);
    }

    public function updateProject(Request $req, $pid){

        $projects = Projects::find($pid);

        $projects->pname = $req->pname;
        $projects->client = $req->client;
        
        $projects->tcost = $req->tcost;
        $projects->paid = $req->paid;
        
      
        $projects->status = $req->status;
   
        $projects->save();

        if($projects->status=="completed")
        {
        $sold = new SoldHistory();
        
        $sold->pid = $projects->pid;
        $sold->pname = $req->pname;
        $sold->tcost = $req->tcost;
       
        $sold->ecost = $req->ecost;
        
        $sold->profit = $req->tcost-$req->ecost;
        $sold->sdate = date('Y-m-d H:i:s');
        
        $sold->save();
        }

        
        return redirect()->route('manager.projectList');
    }

    public function deleteProject($pid){

        $project = Projects::find($pid);
        return view('manager.delete_project', ['project'=>$project]);
    }

    public function destroyProject($pid){

        Projects::destroy($pid);
        return redirect()->route('manager.projectList');
    }


    


    public function expenseList()
    {
       $expenseList = Expenses::all();

       return view('manager.expense',['expense'=> $expenseList]);
    }

    

   

   

    public function bonusList()
    {
       //$bonusList = Bonus::all();

       $bonusList =Bonus::where('status', "pending")->get();

       return view('manager.bonus',['bonus'=> $bonusList]);
    }

    public function editBonus($serialno){

        $bonus = Bonus::find($serialno);
        return view('manager.edit_bonus', ['bonus'=>$bonus]);
    }

    public function updateBonus(Request $req, $serialno){

        $bonus = Bonus::find($serialno);

        $bonus->percentage = $req->percentage;
        $bonus->status = "accepted";
   
        $bonus->save();

        return redirect()->route('manager.bonusList');
    }

    public function rejectBonus($serialno){

        $bonus = Bonus::find($serialno);
        return view('manager.reject_bonus', ['bonus'=>$bonus]);
    }

    public function updaterejectBonus(Request $req, $serialno){

        $bonus = Bonus::find($serialno);

       
        $bonus->status = "rejected";
   
        $bonus->save();

        return redirect()->route('manager.bonusList');
    }

    public function SoldHistory()
    {
       //$bonusList = Bonus::all();

       $soldList = soldHistory::all();

       return view('manager.soldHistory',['sold'=> $soldList]);
    }

    public function viewReport(Request $req)
    {
       //$bonusList = Bonus::all();

       //$soldList = soldHistory::all();

       
        $profit = SoldHistory::whereBetween('sdate',[$req->fdate,$req->ldate])->sum('profit');
        $tprofit=DB::table('sold')->sum('profit');

       return view('manager.report',['profit'=> $profit],['tprofit'=> $tprofit]);
    }



  



}
