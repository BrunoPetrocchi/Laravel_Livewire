<div>
     <input wire:model="nome" type="text" class="nome">
     <p>  {{ $nome }} </p>
     <hr/>

     <input wire:model='opcao' type="checkbox" class="opcao">
     <p>  @if ($opcao) checado @endif  </p>
     <hr/>

     <select wire:model='select'>
         <option>0 %</option>
         <option>10 %</option>
         <option>20 %</option>
         <option>30 %</option>
     </select>
     <p>   {{ $select }} </p>
     <hr/>

     <select wire:model= 'multiplo' multiple>
        <option>0 </option>
        <option>10</option>
        <option>20</option>
        <option>30</option>
    </select>
    <p>   {{ implode(',', $multiplo) }} </p>
    <hr/>

    <input wire:model="nome" type="text" class="nome">
    <p>  {{ $nome }} </p>
    <hr/>
    {{-- <button wire:mouseenter="resetar('Enviando valor')">Resetar Nome </button> --}}
    <button wire:click="resetar('Enviando valor')">Resetar Nome </button>

  <hr/>
  <form action="#" wire:submit="resetar(':)')">
    <input wire:model="nome" type="text" class="nome">
   <button>Resetar Nome </button>
  </form>

</div>
