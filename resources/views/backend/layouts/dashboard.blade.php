 <div class="span9">
    <div class="content">
        <div class="btn-controls">
            <div class="btn-box-row row-fluid">
                <a href="#" class="btn-box big span4"><i class=" icon-random"></i>
                    <b>
                        {{App\Models\Quiz::count()}}
                    </b>
                    <p class="text-muted">
                        Quiz
                    </p>
                </a>
                <a href="#" class="btn-box big span4"><i class="icon-user"></i>
                    <b>
                        {{App\Models\User::where('is_admin', 0)->count()}}
                    </b>
                    <p class="text-muted">
                        Users
                    </p>
                </a>
                <a href="#" class="btn-box big span4"><i class="icon-money"></i>
                    <b>
                        {{App\Models\Question::count()}}
                    </b>
                    <p class="text-muted">
                        Questions
                    </p>
                </a>
            </div>
        </div>
    </div>
    <!--/.content-->
</div>
<!--/.span9-->
</div>
</div>
<!--/.container-->
</div>
<!--/.wrapper-->
