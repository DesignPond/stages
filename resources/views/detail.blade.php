<div class="card" id="details_{{ $job->id }}" style="display: none; max-width: 1280px;">

    <div class="single-job">
        <div class="job-tab" style="display: block;">
            <div class="row">

                <div class="col-md-3 col-sm-3 col-xs-12">
                    <div class="post-media">
                        <img src="{{ $illu }}"  width="360" height="310" alt="" class="img-responsive img-thumbnail">
                    </div><!-- end media -->
                </div><!-- end col -->

                <div class="col-md-9 col-sm-9 col-xs-12">
                    <div class="badge badge-{{ $job->badge }} mt-0">{{ $job->type->periode }} | {{ $job->type->semaines }}</div>
                    <h3>{{ $job->title }}</h3>
                    <small>
                        <span>Publisher : <a href="#">{{ $job->user->name }}</a></span>
                        <span>Publié : {{ $job->created_at->format('d.m.Y') }}</span>
                    </small>
                    <hr class="invis">
                    <div class="description">{!! $job->description  !!}</div>

                    <div class="adresse_block">
                        <h3>{{ $job->user->name }}</h3>
                        <p>{{ $job->user->complement }}</p>
                        <p>{{ $job->user->rue }}</p>
                        @if(!empty($job->user->cp))
                            <p>CP {{ $job->user->cp }}</p>
                        @endif
                        <p>{{ $job->user->npa }} {{ $job->user->ville }}</p>
                        {!! !empty($job->user->fax) ? '<div class="social mt-4"> '.$job->user->social.'</div>' : '' !!}

                        <ul class="company-links clearfix">
                            {!! !empty($job->user->website) ? '<li><i class="fas fa-link"></i> '.$job->user->website.'</li>' : '' !!}
                            <li><a href="mailto:{{ $job->user->email }}"><i class="fas fa-envelope"></i> {{ $job->user->email }}</a></li>
                            {!! !empty($job->user->telephone) ? '<li><i class="fas fa-phone"></i> '.$job->user->telephone.'</li>' : '' !!}
                            {!! !empty($job->user->fax) ? '<li><i class="fas fa-fax"></i> '.$job->user->fax.'</li>' : '' !!}
                        </ul>
                    </div>

                </div><!-- end col -->

            </div><!-- end row -->
        </div><!-- end job-tab -->
    </div>
</div>