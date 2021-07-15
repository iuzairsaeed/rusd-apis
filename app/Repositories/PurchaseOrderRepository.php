<?php

namespace App\Repositories;

use App\Models\Department;
use App\Models\PurchaseOrder;
use App\Models\Product;
use App\Models\Checkout;
use Illuminate\Database\Eloquent\Model;
use DB;
use Carbon\Carbon;

class PurchaseOrderRepository implements RepositoryInterface
{
    // model property on class instances
    protected $model;

    // Constructor to bind model to repo
    public function __construct(Model $model)
    {
        $this->model = $model;
    }

    // Get all instances of model
    public function all(array $with = [])
    {
        return $this->model->with($with)->get();
    }

    // create a new record in the database
    public function create(array $request)
    {
    
        $data['type'] = "in";
        $data['price'] = $request['price'];
        $data['quantity'] = $request['quantity'];
        $data['created_by'] = auth()->user()->id;
        $purchaseOrder = $this->model->create($data);
        $updatePurchaseOrder = PurchaseOrder::find($purchaseOrder->id);
        $updatePurchaseOrder->purchase_order_id = 0000 + $purchaseOrder->id;
        $updatePurchaseOrder->save();
        $purchaseOrder->products()->attach($request['id'], ['type'=>$data['type'],'quantity' => $request['quantity'],'price' => $request['price'],'vendor_id' => $request['vendor_id'] ]);
    }

    public function createOutPurchase(array $data, string $type) {

        $poId = null;
        if(is_array($data['quantity'])) {
            $request['quantity'] = array_sum($data['quantity']);
        }   
        else {
            $request['quantity'] = $data['quantity'];
        }
        $request['type'] =  $type;
        $request['created_by'] = auth()->user()->id;
        $purchaseOrder = $this->model->create($request);
        
        $updatePurchaseOrder = PurchaseOrder::find($purchaseOrder->id);
        $updatePurchaseOrder->purchase_order_id = 0000+$purchaseOrder->id;
        $updatePurchaseOrder->save();
        
        if(is_array($data['product_id'])) {
            $products = $data['product_id'];
            $quantity = $data['quantity'];
            $price = $data['price'];
            for($i = 0; $i < count($data['product_id']); $i++) {
                $productC = Product::find($products[$i]);
                $purchaseOrder->products()->attach($products[$i], ['type'=>$type,'quantity' => $quantity[$i],'price' => $price[$i],'vendor_id' => $productC->vendor->id,'created_at' =>  Carbon::now()->toDateTimeString()]);
            }   
        }
    }

    public function createInPurchase(array $data, string $type) {

        $poId = null;
           
      
        // if($data['vendor_id']) {
          
        // }
        if(is_array($data['quantity'])) {
            $request['quantity'] = array_sum($data['quantity']);
            // dd($request['quantity']);
        }
        else {
            $request['quantity'] = $data['quantity'];
            // dd($request['quantity']);
        }

        // $request['price'] = $data['price'];
        $request['type'] =  $type;
        $request['created_by'] = auth()->user()->id;
        $purchaseOrder = $this->model->create($request);
        // $deptName = Department::find($request['department_id']);
     
        // if($deptName->name == "Internal") {
        //     $pOId = 'IN'.$purchaseOrder->id;
        // }
        // elseif ($deptName->name == "Operations") {
        //     $pOId = 'OP'.$purchaseOrder->id;
        // }
        // else {
        //     $pOId = 'DM'.$purchaseOrder->id;
        // }
        $updatePurchaseOrder = PurchaseOrder::find($purchaseOrder->id);
        $updatePurchaseOrder->purchase_order_id = 0000+$purchaseOrder->id;
        $updatePurchaseOrder->save();
        
        if(is_array($data['product_id'])) {
            $products = $data['product_id'];
            $quantity = $data['quantity'];
            $price = $data['price'];
            $vendor = $data['vendor_id'];   
            for($i = 0; $i < count($data['product_id']); $i++) {
                $productC = Product::find($products[$i]);
                $productC->quantity = $productC->quantity + $quantity[$i];
                $productC->price = $price[$i];
                $productC->vendor_id = $vendor[$i];
                $productC->update(); 
                $purchaseOrder->products()->attach($products[$i], ['type'=>$type,'quantity' => $quantity[$i],'price' => $price[$i],'vendor_id' => $vendor[$i],'created_at' =>  Carbon::now()->toDateTimeString()]);
            }   
            
        }
        else {
            $productC = Product::find($data['product_id']);
            $productC->quantity = $productC->quantity + $data['quantity'];
            $productC->price = $data['price'];
            $productC->vendor_id = $data['vendor_id'];
            $productC->update(); 
            $purchaseOrder->products()->attach($products[$i], ['type'=>$type,'quantity' => $quantity[$i],'price' => $price[$i],'vendor_id' => $vendor[$i],'created_at' =>  Carbon::now()->toDateTimeString()]);
        }
    }

    // update record in the database
    public function update(array $data, Model $model)
    {
        // dd($data);
        return $model->update($data);
    }

    // remove record from the database
    public function delete(Model $model)
    {
        return $model->delete();
    }

    // show the record with the given id
    public function show($id)
    {
        return $this->model->findOrFail($id);
    }

    // Get the associated model
    public function getModel()
    {
        return $this->model;
    }

    // Set the associated model
    public function setModel($model)
    {
        $this->model = $model;
        return $this;
    }

    // Eager load database relationships
    public function with($relations)
    {
        return $this->model->with($relations);
    }

    // Sort the records by priority
    public function sort(array $order)
    {
        foreach($order as $priority => $id){
            $data = ['priority' => $priority + 1];
            $this->update($data, $id);
        }
    }

    // Get data for datatable
    public function getData($request, $with, $withCount, $whereChecks, $whereOps, $whereVals, $searchableCols, $orderableCols)
    {
        $start = $request->start ?? 0;
        $length = $request->length ?? 10;
        $filter = $request->search;
        $order = $request->order;
        $search = optional($filter)['value'] ?? false;
        $sort = optional($order)[0]['column'] ?? false;
        $dir = optional($order)[0]['dir'] ?? false;
        $from = $request->date_from;
        $to = $request->date_to;
        // $orWhereVal = $request->repcode ? $request->repcode : null;

        $records = $this->model->with($with)->withCount($withCount);

        if($whereChecks){
            foreach($whereChecks as $key => $check){
                $records->where($check, $whereOps[$key] ?? '=', $whereVals[$key]);
            }
        }
        // if($orWhereVal){
        //     $records->orWhere('repcode', $orWhereVal);
        // }

        $recordsTotal = $records->count();

        if($from){
            $records->whereDate('created_at' ,'>=', $from);
        }
        if($to){
            $records->whereDate('created_at' ,'<=', $to);
        }

        if($search){
            $records->where(function($query) use ($searchableCols, $search){
                foreach($searchableCols as $col){
                    $query->orWhere($col, 'like' , "%$search%");
                }
            });
        }
        $recordsFiltered = $records->count();

        if($dir){
            if(in_array($sort, $orderableCols)){
                $orderBy = $sort;
            }else{
                $orderBy = $orderableCols[$sort];
            }
            $records->orderBy($orderBy, $dir);
        }else{
            $records->latest();
        }
        $records = $records->limit($length)->offset($start)->get();

        $message = 'Success';
        $response = 200;
       
        return [
            'message' => $message,
            'response' => $response,
            'recordsFiltered' => $recordsFiltered,
            'recordsTotal' => $recordsTotal,
            'data' => $records,
        ];
    }
}
