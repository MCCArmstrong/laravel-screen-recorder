<?php

namespace App\Http\Controllers;
use App\Models\DeviceMedia;
use App\Models\UserMedia;
// use Illuminate\Support\Facades\Storage;
use Cohensive\Embed\Facades\Embed;
use Storage;
use Illuminate\Http\Request;

class ScreenRecorder extends Controller
{
    public function BaseIndex(){

        return view('admin.index');
    }

    public function youtubeLinkHander(Request $request){
      
        $url = $request->link;
        parse_str( parse_url( $url, PHP_URL_QUERY ), $my_array_of_vars );
        $YoutubeId = $my_array_of_vars['v']; 
        $video = new DeviceMedia;
        $video->filename = $YoutubeId;
        $video->save();
        
       return view('admin.link');

       
       
    }

    public function youtubeVideoHandler()
    {
        // return view('admin.link');
         return redirect()->route('preview');
    }
        
    
    public function YoutubeVideoView()
      {
      
        //example usage.
        $links = DeviceMedia::all();
        // dd($links);
        $data = [
            'links' => $links
        ];

        return view('admin.preview', $data);
    }


    public function MediaTab(Request $request)
    {
      
       return view('admin.tabs');
    }


    public function MediaTabSave(Request $request)
    {   
        
        
        // $record_screen = $request->post('record_screen');
        // dd($record_screen);
        $file = $request->file('file');
        // dd($file);
        
        if (empty($file->getRealPath())) {
            return back()->with('error','No file selected');
        }
        // dd($file->getRealPath());
        $video = new UserMedia;
        $video->recordfile = $file;
        $video->save();
        
    }

 




    
    // public function urlVideoUpload(Request $request, WorkSpaceManager $workSpaceManager){
    //     try {
    //         $response = userHasAccessToWorkSpace($workSpaceManager);
    //         if($response['status'] == false){
    //             return response()->json([
    //                 "message" => $response["message"]
    //             ], 403);
    //         }
    //         $workspace = $response['workspace'];
    
    //         $response = $this->getYoutubeURL($request);
    //         if($response['error'] != false){
    //             return response()->json([
    //                 'status' => 'error',
    //                 'message' => "Unable to get video from URL."
    //             ], 400);
    //         }
    //         $link = $response['url'];
    //         $video = file_get_contents($link);
    //         $name = time();
    //         $path = $name. ".mp4";
    //         file_put_contents(storage_path("app/public/videos/$path"), $video);
    //         $video = new DeviceMedia;
    //         // $video->user_id = Auth::id();
    //         $video->workspace_id = $workspace->id;
    //         $video->name = $name;
    //         $video->file = $path;
    //         $video->save();
    
    //         if($request->start_time == "" || !($request->start_time)){
    //             $request->start_time = 1;
    //         }
    
    //         if($request->end_time == "" || !($request->end_time)){
    //             $request->end_time = 5;
    //         }
    
    //         $creationStatus = $this->createVideoGif($video, $request);
    //         if($creationStatus['status'] == true){
    //             $storage = new StorageModel();
    //             $storage->user_id = Auth::id();
    //             $storage->workspace_id = $workspace->id;
    //             $storage->type = 'gif';
    //             $storage->path = $creationStatus['gif'];
    //             $storage->save();
    
    //             return response()->json([
    //                 'status' => 'success',
    //                 'storage' => $storage
    //             ]);
    //         }
    
    //         return response()->json([
    //             'status' => 'error',
    //             'message' => "unable to complete request. please upload a valid video"
    //         ], 400);
    
    
    //     } catch (Exception $error) {
    
    //         Log::info('StorageController@urlVideoUpload error message: ' . $error->getMessage());
    //         $message = 'Unable to store Video. Encountered an error.';
    //         return response()->json([
    //             'status' => 'error',
    //             'message' => $message
    //         ], 500);
    //     }
    // }
    

    // private function getYoutubeURL($request){
    //     $video_url = $request->video_url;
    //     if(strpos($video_url, 'youtube.com') !== false){
    //         parse_str( parse_url( $video_url, PHP_URL_QUERY ), $my_array_of_vars );
    //         $youtube_video_id = isset($my_array_of_vars['v']) ? $my_array_of_vars['v'] : "";
    
    //         if($youtube_video_id != ""){
    //             $response = getYoutubeVideoURL($youtube_video_id);
    //             return $response;
    //         }
    //     }
    
    //     return [
    //         'error' => true,
    //         'url' => ''
    //     ];
    // }
   
}





