<?php

use App\Models\Animal;
use Livewire\Attributes\Computed;
use Livewire\Volt\Component;

new class () extends Component {
  public int $limit;
  public int $offset;
  public int $count;

  public function mount(): void
  {
    $this->limit = 3;
    $this->offset = 0;
    $this->count = Animal::where('status', 'reserved')->count();
  }

  #[Computed]
  public function animals()
  {
    return Animal::select()
      ->where('status', 'reserved')
      ->limit($this->limit)
      ->offset($this->offset)
      ->get();
  }

  public function loadMore(): int
  {
    return $this->offset < $this->count - 3 ?
      $this->offset += 3 :
      $this->offset = $this->limit;
  }

  public function loadLess(): int
  {
    return $this->offset > 0 ?
      $this->offset -= 3 :
      $this->offset = $this->limit;
  }
} ?>
<div class="px-6 py-10 mx-auto max-w-7xl text-center lg:px-8">
  <div class="mx-auto max-w-2xl">
    <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">
      Special Homes Needed
    </h2>
  </div>
  <div class="flex justify-between mx-20 max-w-5xl">
    @if($this->offset)
    <button wire:click.prevent="loadLess" type="submit"
      class="inline-flex absolute left-0 items-center px-4 py-2 mx-4 text-xs font-medium text-indigo-700 bg-indigo-50 rounded-md ring-1 ring-inset ring-indigo-700/10">
      <span aria-hidden="true">&larr;</span>
    </button>
  @endif
    <button wire:click.prevent="loadMore" type="submit"
      class="inline-flex absolute right-0 items-center px-4 py-2 mx-4 text-xs font-medium text-indigo-700 bg-indigo-50 rounded-md ring-1 ring-inset ring-indigo-700/10">
      <span aria-hidden="true">&rarr;</span>
    </button>
  </div>
  <ul role="list"
    class="grid grid-cols-1 gap-x-8 gap-y-16 mx-auto mt-20 max-w-2xl sm:grid-cols-2 lg:mx-0 lg:max-w-none lg:grid-cols-3">
    @foreach ($this->animals as $animal)
    <li wire:key="{{ md5($animal->name) }}">
      <img class="mx-auto w-56 h-56 rounded-full" src="{{ $animal->pic2 }}" alt="">
      <h3 class="mt-6 text-base font-semibold tracking-tight leading-7 text-gray-900">{{$animal->name}}</h3>
      <p
      class="px-4 mx-auto text-sm leading-6 text-center text-gray-700">{{$animal->shortdescription}}</p>
      <p
      class="flex justify-between px-4 mx-auto text-sm leading-6 text-indigo-700 bg-indigo-50 rounded-md border ring-1 ring-inset ring-indigo-700/10">
      <span>
        <i class="fa-solid fa-paw"></i>&nbsp;
        {{$animal->breed}}
      </span>
      <span>
        @if($animal->sex === 'female')
      <i class="fa fa-venus" aria-hidden="true"></i>
    @else
    <i class="fa fa-mars" aria-hidden="true"></i>
  @endif
        {{ucfirst($animal->sex)}}
      </span>
      <span>
        <i class="fa-solid fa-droplet"></i>
        {{$animal->colour}}
      </span>
      <span>
        <i class="fa-solid fa-person-cane"></i>
        {{$animal->age}}
      </span>
      </p>
    </li>
  @endforeach
  </ul>
</div>