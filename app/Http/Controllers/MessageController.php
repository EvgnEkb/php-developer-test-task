<?php

namespace App\Http\Controllers;

use App\Models\Message;
use App\Services\MessageService;
use Illuminate\Contracts\View\View;
use Illuminate\Contracts\View\Factory;
use App\Http\Requests\StoreMessageRequest;
use Illuminate\Contracts\Foundation\Application;

class MessageController extends Controller
{
    private MessageService $messageService;

    public function __construct(
        MessageService $messageService
    ) {
        $this->messageService = $messageService;
    }

    /**
     * Вывести все сообщения на стене.
     *
     * @return Application|Factory|View
     */
    public function index()
    {
        $messages = $this->messageService->list();

        return view('index', compact('messages'));
    }

    /**
     * Добавить новое сообщение.
     *
     * @param StoreMessageRequest $request
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(StoreMessageRequest $request): \Illuminate\Http\RedirectResponse
    {
        $this->messageService->make($request);

        return redirect()->route('home')->with('status', 'Сообщение удачно создано');
    }

    /**
     * Удалить сообщение.
     *
     * @param $id
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function delete($id): \Illuminate\Http\RedirectResponse
    {
        return $this->messageService->delete($id);
    }

    /**
     * @param Message $message
     *
     * @return void
     */
    public function destroy(Message $message): void
    {
        // TODO: надо разобраться, почему не работает форма с подменным методом, поэтому сделал метод delete
    }
}
