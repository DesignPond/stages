<div class="section lb pt-4">
    <div class="container">
        <div class="section-title text-center clearfix mb-4 mt-4">
            <h4>Stages {{ $title }}</h4>
        </div>
        <div class="all-jobs job-listing clearfix" id="listing">

            @if(!$jobs->isEmpty())
                @foreach($jobs as $index => $job)
                    <div class="job-tab" style="display: block;">
                        <div class="row">
                            <div class="col-md-2 col-sm-2 col-xs-12">
                                <div class="post-media">
                                    <a href="job-single.html">
                                        <?php $illu = asset('illu/0'.array_random([1,2,3,4,5,6,7,8]).'.svg'); ?>
                                        <img src="{{ $illu }}" width="140" height="120" alt="" class="img-responsive img-thumbnail">
                                    </a>
                                </div><!-- end media -->
                            </div><!-- end col -->
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="badge badge-{{ $job->badge }}">{{ $job->type->periode }} | {{ $job->type->semaines }}</div>
                                <h3><a href="job-single.html" title="">{{ $job->title }}</a></h3>
                                <small>
                                    <span>Publisher : <a href="#">{{ $job->user->name }}</a></span>
                                    <span>Publié : {{ $job->created_at->format('d.m.Y') }}</span>
                                </small>
                            </div><!-- end col -->
                            <div class="col-md-2 col-sm-2 col-xs-12">
                                <div class="job-meta">
                                    <p><small>{{ $job->user->ville }}</small></p>
                                </div><!-- end meta -->
                            </div><!-- end col -->
                            <div class="col-md-2 col-sm-2 col-xs-12">
                                <div class="job-meta text-center">
                                    <a data-options='{"arrows" : false}' data-fancybox="details_{{ $job->id }}" data-src="#details_{{ $job->id }}" href="javascript:;" class="btn btn-primary btn-sm btn-block mt-4">Information</a>
                                </div>
                            </div><!-- end col -->
                        </div><!-- end row -->

                        @include('detail', ['job' => $job, 'illu' => $illu])

                    </div><!-- end job-tab -->

                @endforeach
            @else
                <div class="job-tab" style="display: block;">
                    <div class="row">
                        <div class="col text-center">
                            <p class="mb-0">Encore aucun stage</p>
                        </div>
                    </div>
                </div>
            @endif

        </div><!-- end alljobs -->
    </div><!-- end container -->
</div><!-- end section -->