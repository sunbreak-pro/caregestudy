<?PHP

namespace App\Http\Controllers;

use App\Models\Category;

class CategoryController extends Controller{
    public function store(Request $request, Student $student)
{
    $input_student = $request['student'];
    $input_subjects = $request->subjects_array;  //subjects_arrayはnameで設定した配列名
    
    //先にstudentsテーブルにデータを保存
    $student->fill($input_student)->save();
    
    //attachメソッドを使って中間テーブルにデータを保存
    $student->subjects()->attach($input_subjects); 
    return redirect('/students');
}
}
?>