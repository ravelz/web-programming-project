<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use App\Models\Like;
use App\Models\Comment;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class articleController extends Controller
{
    public function like($id){
        // dd($id, $id_u);
        $user = auth()->user()->id_user;
        $jml_likee = DB::table('articles')
                ->join('likes', 'likes.id_user', '=', 'articles.id_user')
                ->where('articles.id_article', '=', $id)
                ->value('jml_like');

        $exist = DB::table('likes')
                ->where('likes.id_article', '=', $id)
                ->where('likes.id_user', '=', $user)
                ->exists();

        $likeCount = DB::table('likes')
            ->where('likes.id_article', '=', $id)
            ->selectraw('COUNT(id_user) as count')
            ->get()
        ;

        // dd($likeCount);
        if($exist){ //unlike
            
            DB::table('likes')
                ->where('likes.id_user', '=', $user)
                ->where('likes.id_article', '=', $id)
                ->delete();
            $likeCount = DB::table('likes')
                ->where('likes.id_article', '=', $id)
                ->selectraw('COUNT(id_user) as count')
                ->get()
            ;
            $jml_likee = intval($likeCount[0]->count);
        }else{
            Like::create([
                'id_user' => $user,
                'id_article' => $id, 
                'created_at' => Carbon::now(),  
                'updated_at' => Carbon::now()
            ]);
            $likeCount = DB::table('likes')
                ->where('likes.id_article', '=', $id)
                ->selectraw('COUNT(id_user) as count')
                ->get()
            ;
            $jml_likee = intval($likeCount[0]->count);
        }

        DB::table('articles')
            ->where('id_article', $id)
            ->update(['jml_like' => $jml_likee]);

        return redirect()->back();
    }

    public function comment(Request $request, $id){
        $user = auth()->user()->id_user;
        $lastIdComment = Comment::select('id_comment')->orderBy('id_comment', 'desc')->count();
        $idComment = (int)substr($lastIdComment, -3);

        if($idComment == 0){
            $idComment = "C001";
        }else{
            $idComment = (int)substr($lastIdComment, -3);
            $idComment = "C".str_pad($idComment+1, 3, '0', STR_PAD_LEFT);
        }

        Comment::create([
            'id_comment' => $idComment,
            'id_user' => $user,
            'id_article' => $id,
            'comment' => $request->commentInput,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        return redirect()->back();
    }
}
