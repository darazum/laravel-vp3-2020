<div class="sidebar-item">
    <div class="sidebar-item__title">Категории</div>
    <div class="sidebar-item__content">
        <ul class="sidebar-category">
            <? /** @var \App\Category $category */ ?>
            @foreach($categories as $category)
                <li class="sidebar-category__item">
                    @if (isset($currentCategory) && $currentCategory->id == $category->id)
                        &nbsp;&nbsp;&nbsp;
                    @endif
                    <a href="{{ route('category',$category->id) }}" class="sidebar-category__item__link">{{ $category->title }}</a>
                </li>
            @endforeach
        </ul>
    </div>
</div>
