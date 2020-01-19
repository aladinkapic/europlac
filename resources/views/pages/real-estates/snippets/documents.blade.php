<div class="files">
    @foreach($files as $file)
        <a href="/images/estates/{{$file->file->file_name ?? '/'}}" target="_blank">
            <div class="single-file">
                @if($file->file->type == 'docx')
                    <i class="fas fa-file-word"></i>
                @elseif($file->file->type == 'pdf')
                    <i class="fas fa-file-pdf"></i>
                @elseif($file->file->type == 'xls' or $file->file->type == 'xlsx')
                    <i class="fas fa-file-excel"></i>
                @else
                    <i class="fas fa-file"></i>
                @endif

                <p>{{$file->file->real_name ?? '/'}}</p>
            </div>
        </a>
    @endforeach
</div>
