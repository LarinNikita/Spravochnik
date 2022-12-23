<nav class="navbar navbar-light bg-light">
    <form method="get" action="{{route('find')}}">
        @csrf
        <div class="form-group">
            <label for="exampleFormControlSelect1">Варианты</label>
            <select class="form-control" id="exampleFormControlSelect1" name="key">
                <option value="FIO">По ФИО</option>
                <option value="officeNumber">По кабинету</option>
                <option value="ipPhone">По телефону</option>
                <option value="account">По учётной записи</option>
            </select>
        </div>

        <input type="search" placeholder="Search" aria-label="Search" name="param">
        <button type="submit">Search</button>
    </form>
</nav>
