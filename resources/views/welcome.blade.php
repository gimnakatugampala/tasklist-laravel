    @extends('layouts.app')

    @section('content')
    <!--navbar-->
    <nav class="navbar navbar-light bg-light mb-5">
        <div class="container-fluid">
            <a class="navbar-brand" href="/">
                Tasklist
            </a>
        </div>
    </nav>

    <!--card new task-->
    <div class="card mx-auto">
        <div class="card-header">
            New Task
        </div>
        <div class="card-body">
            <h5 class="card-title">Task</h5>
            <form class="row">
                <div class="mb-3 col-md-12">
                    <input type="text" class="form-control form-control-lg" name="task" placeholder="Add Task..">
                </div>
                <button type="submit" class="btn btn-primary mb-3 ml-3"><i class="fas fa-plus"></i> Add Task</button>
            </form>
        </div>
    </div>


    <!--All Tasks-->
    <div class="card mx-auto mt-5">
        <div class="card-header">
            Current Task
        </div>
        <ul class="list-group">
            <li class="list-group-item disabled" aria-current="true">Tasks</li>
            <li class="list-group-item">First Task <button type="button" class="btn btn-danger"><i class="fas fa-trash-alt"></i> Delete</button></li>
            <li class="list-group-item">Second Task<button type="button" class="btn btn-danger"><i class="fas fa-trash-alt"></i> Delete</button></li>
            <li class="list-group-item">Third Task<button type="button" class="btn btn-danger"><i class="fas fa-trash-alt"></i> Delete</button></li>
        </ul>
    </div>
    @endsection

    <!-- <div class="card-body">
        <h5 class="card-title">Task</h5>
        <form class="row">
            <div class="mb-3 col-md-12">
                <input type="text" class="form-control form-control-lg" name="task" placeholder="Add Task..">
            </div>
            <button type="submit" class="btn btn-primary mb-3 ml-3"><i class="fas fa-plus"></i> Add Task</button>
        </form>
    </div> -->