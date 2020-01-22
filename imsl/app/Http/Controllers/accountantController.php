<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\labours;
use App\suppliers;
use App\expenses;
use App\projects;
use App\users;
use App\bonus;
use Validator;
use App\Http\Requests\LabourRequest;
use App\Http\Requests\ExpenseRequest;


class accountantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $req)
    {   
       
        $totalLabour = labours::count();
        $bonusRequest = bonus::count();
         $totalExpense = expenses::sum('amount');
         $Expense = expenses::whereBetween('edate',[$req->fdate,$req->ldate])->sum('amount');
         $totalAccepted = bonus::where('Status','=','accepted')->count();
         $totalRejected = bonus::where('Status','=','rejected')->count();
         $totalPending = bonus::where('Status','=','pending')->count();

       return view('accountant.index',compact('totalLabour','totalAccepted','bonusRequest','totalRejected','totalPending','totalExpense','Expense'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function add_labour(){
        return view('accountant.add_labour');
    }

    public function create_labour(LabourRequest $req){

        $labour = new labours();
        $labour->lname = $req->labourName;
        $labour->laddress = $req->labourAddress;
        $labour->lcontact = $req->labourContact;
        $labour->expertise = $req->labourExperties;
        $labour->salary = $req->labourSalary;
        // $labour->hiredate=$req->date('m/d/Y', time());
        $labour->save();
        return redirect()->route('accountant.add_labour');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
   
    public function index_labour()
    {
        $labourList = labours::all();
        return view('accountant.labour', ['labour'=> $labourList]);
    }

 public function edit_labour($lid){

        $labour = labours::find($lid);
        return view('accountant.edit_labour', ['labour'=>$labour]);
    }

    public function update_labour(LabourRequest $req, $lid){

        $labour = labours::find($lid);

        $labour->lname = $req->labourName;
        $labour->laddress = $req->labourAddress;
        $labour->lcontact = $req->labourContact;
        $labour->expertise = $req->labourExperties;
        $labour->salary = $req->labourSalary;
        $labour->save();

        return redirect()->route('accountant.labour');
    }
    public function delete_labour($lid){

        $labour = labours::find($lid);
        return view('accountant.delete_labour', ['labour'=>$labour]);
    }

    public function destroy_labour($lid){

        labours::destroy($lid);
        return redirect()->route('accountant.labour');
    }


    //supplier

public function index_supplier()
    {
        $suppplierList = suppliers::all();
        return view('accountant.supplier', ['supplier'=> $suppplierList]);
    }

    public function edit_supplier($sid){

        $supplier = suppliers::find($sid);
        return view('accountant.edit_supplier', ['supplier'=>$supplier]);
    }

    public function update_supplier(Request $req, $sid){

        $supplier = suppliers::find($sid);
       // $supplier->balance = $supplier->balance;
        $supplier->balance = $supplier->balance-$req->bpay;
        $supplier->save();
        return view('accountant.edit_supplier', ['supplier'=>$supplier]);
    }

    //Expense

    public function index_expense()
    {
        $expenseList = expenses::all();
        return view('accountant.expense', ['expense'=> $expenseList]);
    }

    public function add_expense(){
        return view('accountant.add_expense');
    }
   public function create_expense(ExpenseRequest $req){

        $expense = new expenses();
        $expense->purpose = $req->purpose;
        $expense->details = $req->details;
        $expense->amount = $req->expenseAmount;

        $expense->edate = date('Y-m-d');
       
        $expense->save();
        return redirect()->route('accountant.add_expense');
    }
    public function edit_expense($eid){

        $expense = expenses::find($eid);
        return view('accountant.edit_expense', ['expense'=>$expense]);
    }

    public function update_expense(ExpenseRequest $req, $eid){

        $expense = expenses::find($eid);
       // $supplier->balance = $supplier->balance;
        $expense->purpose = $req->purpose;
        $expense->details = $req->details;
        $expense->amount = $req->expenseAmount;
        $expense->save();
        return view('accountant.edit_expense', ['expense'=>$expense]);
    }
     public function delete_expense($eid){

        $expense = expenses::find($eid);
        return view('accountant.delete_expense', ['expense'=>$expense]);
    }

    public function destroy_expense($eid){

        expenses::destroy($eid);
        return redirect()->route('accountant.expense');
    }

///project
    public function index_project()
    {
        $projectList = projects::all();
        return view('accountant.project', ['project'=> $projectList]);
    }

    public function edit_project($pid){

        $project = projects::find($pid);
        return view('accountant.edit_project', ['project'=>$project]);
    }

    public function update_project(Request $req, $pid){

        $project = projects::find($pid);
       // $supplier->balance = $supplier->balance;
        $project->paid = $project->paid+$req->pay;
        $project->save();
        return view('accountant.edit_project', ['project'=>$project]);
    }
    //bonus
    
     public function index_employee()
    {
        // SomeModel::select(..)->whereNotIn('book_price', [100,200])->get();
        $employeeList = users::all()->whereNotIn('type', ['Manager']);
        return view('accountant.employee', ['emp'=> $employeeList]);
    }
    public function edit_bonus($eid){

        $employee = users::find($eid);
        return view('accountant.employee_bonus', ['emp'=>$employee]);
    }

    //bonus
    
    public function bonus_reqeust(request $req,$eid)
    {
        
        $employee = users::find($eid);
        $bonus = new bonus();
        $bonus->eid = $req->eid;
        $bonus->ename = $employee->ename;
        $bonus->type = $employee->type;
        $bonus->reason = $req->reason;
        $bonus->percentage = 0;
        $bonus->status = "pending";
        $bonus->bdate = date('Y-m-d H:i:s');

        $bonus->save();
        return redirect()->route('accountant.employee');
    }
     public function show_Bonus()
    {
        $bonusList = bonus::all();
        return view('accountant.bonus', ['emp'=> $bonusList]);
    }
    
     public function delete_bonus($sno){

        $employee = bonus::find($sno);
        return view('accountant.delete_bonus', ['emp'=>$employee]);
    }

    public function destroy_bonus($sno){

        bonus::destroy($sno);
        return redirect()->route('accountant.bonus');
    }


}
