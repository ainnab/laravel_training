<?php

namespace App\Http\Controllers;

use App\Models\Status;
use App\Models\Report;
use App\Models\User;
use Illuminate\Http\Request;

class StatusController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $status = new Status;     
        $status->type = $request->type;
        $status->desc = $request->desc;
        $status->sdate = $request->sdate;
        $status->stime = $request->stime;
        $status->report_id = $request->report_id;

        $status->save();

        return response()->json([
            'new status record:'=>$status,
			'status' => 200,
		]);        

    }


    /**
     * Display the specified resource.
     */
    public function show(Status $status)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Status $status)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Status $status)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Status $status)
    {
        //
    }


  public function fetchAll() {
        $statuses =Status::all();
        $output = '';
        if ($statuses->count() > 0) {
                $output .= '<table id="table_driver" class="table table-striped table-sm text-center align-middle">
                <thead>
                  <tr>
                    <th>id</th>
                    <th>type</th>
                    <th>desc</th>
                    <th>sdate</th>
                    <th>stime</th>
                    <th>report_id</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>';
            foreach ($statuses as $status) {
                $output .= '<tr>
                    <td>' . $status->id . '</td>
                    <td>' . $status->type . '</td>
                    <td>' . $status->sdate . '</td>
                    <td>' . $status->stime . '</td>
                    <td>' . $status->report_id . '</td>
                    <td>
                      <a href="#" id="' . $status->id . '" class="text-success mx-1 editIcon" data-bs-toggle="modal" data-bs-target="#modal_edit_record"><i class="bi-pencil-square h4"></i></a>
                      <a href="#" id="' . $status->id . '" class="text-danger mx-1 deleteIcon"><i class="bi-trash h4"></i></a>
                    </td>
                </tr>';
            }
            $output .= '</tbody></table>';
                echo $output;
        } else {
                echo '<h1 class="text-center text-secondary my-5">No record present in the database!</h1>';
        }    
    }    


 public function trace_user_from_status() {
        $user = User::find(1);	
        echo $user->statuses;
    }



}
/*end class*/