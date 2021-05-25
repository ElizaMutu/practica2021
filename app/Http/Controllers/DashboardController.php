<?php

namespace App\Http\Controllers;

use App\Models\Board;
use App\Models\BoardUser;
use App\Models\Task;
use App\Models\User;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

/**
 * Class DashboardController
 *
 * @package App\Http\Controllers
 */
class DashboardController extends Controller
{
    /**
     * @return Application|Factory|View
     */
    public function index()
    {
        return view('dashboard.index');
    }

    public function viewBoards()
    {
        /** @var Board $board */
        $boards = with(['user', 'boardUsers']);
       // $boards = Board::get($id)->count();

        /** @var User $user */
        $user = Auth::user();

    }
}
