<?php

namespace App\Services;

use App\Models\Message;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\StoreMessageRequest;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;

class MessageService
{
    /**
     * Получить список сообщений.
     *
     * @return LengthAwarePaginator
     */
    public function list(): LengthAwarePaginator
    {
        return Message::with('author')
            ->orderByDesc('created_at')
            ->paginate(10);
    }

    /**
     * Создание нового сообщения.
     *
     * @param StoreMessageRequest $request
     *
     * @return void
     */
    public function make(StoreMessageRequest $request): void
    {
        Message::query()->create([
            'text'    => $request->text,
            'user_id' => Auth::id(),
        ]);
    }

    /**
     * Удалить сообщение.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function delete(int $id): \Illuminate\Http\RedirectResponse
    {
        $message = Message::query()->find($id);

        if ($message->user_id === Auth::id() || Auth::user()->is_admin) {
            Message::destroy($id);

            return redirect()->route('messages.index')->with('status', 'Post Delete Successfully');
        }

        return redirect()
            ->route('messages.index')
            ->withErrors([
                'deleteError' => 'Вы можете удалять только свои посты',
            ]);

    }
}
