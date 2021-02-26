    @extends('layouts.app')

    @section('content')
    <!--navbar-->
    <nav class="navbar navbar-light bg-light">
        <div class="container-fluid mb-5">
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
    @endsection