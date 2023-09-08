<?php

namespace App\Http\Controllers;

use App\Models\reply;
use Illuminate\Http\Request;

class replyController extends Controller
{
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $reply = reply::find($id);

        $reply->update([
            'desc' => $request->reply ?? '',
        ]);

        return redirect(route('message'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $reply = reply::find($id);
        $result = 'success';

        if ($reply) {
            $reply->delete();
        } else {
            $result = 'fail';
        }

        return $result;
    }
}
