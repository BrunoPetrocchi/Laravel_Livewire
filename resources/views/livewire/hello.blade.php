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
</div>
