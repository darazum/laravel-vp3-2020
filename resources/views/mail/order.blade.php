<? /**  @var \App\User $user */ ?>
<? /**  @var \App\Order $order */ ?>

Пользователь {{ $user->id }} заказал следующие товары: <br>

<br>
@forelse($order->goods as $good)
    {{ $good->id }} {{ $good->title }}
@empty
    Нет товаров в заказе
@endforelse
