<?php 
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;

use DB;
use App\Models\UserModel;


class UserController extends Controller{
    public function ShowData()
    {
       return view('home');
    }
    public function Insert_Data(Request $post)
    {
        $insert_dayta = new UserModel;
        $insert_dayta->Name=$post->name;
        $insert_dayta->Email=$post->email;
        $insert_dayta->Mobile=$post->mobile;
        $insert_dayta->City=$post->city;
        $insert_dayta->DOB=date('Y-m-d',strtotime($post->date));
        $insert_dayta->Gender=$post->gender;
        $insert_dayta->Subject=implode(',',$post->subject);
        $insert_dayta->save();
        $post->Session()->flash('insert_msg','You have successfully submitted your details');
        return redirect('showData');
    }
    public function Fetch_Data()
    {
        $fetch_Data=\App\Models\UserModel::all();
        return view('fetch_data')->with('fetch_table', $fetch_Data);
    }
    public function Update_Data(Request $post,$id)
    {
        $update_Fetch=\App\Models\UserModel::find($id);
        return view('update')->with('fetch', $update_Fetch);
    }
    public function UpdateData(Request $post)
    {
       echo $userid=$post->id; 
       $update_Fetch=\App\Models\UserModel::find($post->id);
       DB::table('crud_operations')
       ->where('id', $userid)
       ->update(['Name' =>$post->name,'Email' =>$post->email,'Mobile' =>$post->mobile,'DOB' =>$post->date,'Gender' =>$post->gender,'Subject' =>implode(',',$post->subject)]);
       $post->Session()->flash('update_msg','You have successfully updated your details...');
        return redirect('fetch_data');
    }
    public function DeleteData(Request $post,$id)
    {
        DB::table('crud_operations')->where('ID', $id)->delete();
       $post->Session()->flash('delete_msg','You have successfully deleted your details...');
        return redirect('fetch_data');
    }
}
