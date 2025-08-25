<?php

use function Livewire\Volt\{state, mount};

state(['firstNumber', 'operator', 'secondNumber', 'calcs']);

mount(function () {
    if ($this->operator == 'addition') {
        $this->operator = '+';
        $this->calcs = $this->firstNumber + $this->secondNumber;
    } elseif ($this->operator == 'subtraction') {
        $this->operator = '-';
        $this->calcs = $this->firstNumber - $this->secondNumber;
    } elseif ($this->operator == 'multiplication') {
        $this->operator = '×';
        $this->calcs = $this->firstNumber * $this->secondNumber;
    } elseif ($this->operator == 'division') {
        $this->operator = '/';
        $this->calcs = $this->firstNumber / $this->secondNumber;
    } else {
        $this->calcs = '無効な演算子です';
    }
});

?>

<div>
    <h1>計算結果</h1>
    <p><br></p>
    <p>{{ $firstNumber }} {{ $operator }} {{ $secondNumber }} = {{ $calcs }}</p>
</div>
