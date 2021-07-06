<form action="" class="calc row" method="post">
    <div class="field col-12">
        <p>&nbsp;<?=$operator?></p>
        <h4><?=$display?></h4>
    </div>
    <button name="operator" value="C" type="submit" class="btn btn-light col-3 offset-9">AC</button>
    <button name="number" value="9" type="submit" class="btn btn-light col-3">9</button>
    <button name="number" value="8" type="submit" class="btn btn-light col-3">8</button>
    <button name="number" value="7" type="submit" class="btn btn-light col-3">7</button>
    <button name="operator" value="div" type="submit" class="btn btn-light col-3">/</button>
    <button name="number" value="6" type="submit" class="btn btn-light col-3">6</button>
    <button name="number" value="5" type="submit" class="btn btn-light col-3">5</button>
    <button name="number" value="4" type="submit" class="btn btn-light col-3">4</button>
    <button name="operator" value="mul" type="submit" class="btn btn-light col-3">*</button>
    <button name="number" value="3" type="submit" class="btn btn-light col-3">3</button>
    <button name="number" value="2" type="submit" class="btn btn-light col-3">2</button>
    <button name="number" value="1" type="submit" class="btn btn-light col-3">1</button>
    <button name="operator" value="sub" type="submit" class="btn btn-light col-3">-</button>
    <button name="number" value="0" type="submit" class="btn btn-light col-3">0</button>
    <button name="number" value="." type="submit" class="btn btn-light col-3">.</button>
    <button name="operator" value="=" type="submit" class="btn btn-light col-3">=</button>
    <button name="operator" value="sum" type="submit" class="btn btn-light col-3">+</button>
    <input type="text" name="operand1" value="<?=$operand1?>" hidden>
    <input type="text" name="operand2" value="<?=$operand2?>" hidden>
    <input type="text" name="operation" value="<?=$operator?>" hidden>
</form>
