@foreach ($companies as $company)
    &#60;x-company-list-item :company="$company"&#62;
        &#60;div class="card"&#62;
            &#60;img class="logo" src="{{ $company-&#62;logo ? asset('images/' . $company-&#62;logo) : asset('images/placeholder-logo.jpg') }}" alt="Company Logo"&#62;
            &#60;div class="details"&#62;
                &#60;h3&#62;{{ $company-&#62;name }}&#60;/h3&#62;
                &#60;p class="minor-details"&#62;Total Employees: {{ $company-&#62;employees()-&#62;count() }}&#60;/p&#62;
                @if ($company-&#62;created_at != $company-&#62;updated_at)
                    &#60;p class="minor-details"&#62;Updated on {{ $company-&#62;updated_at-&#62;format('jS F Y') }}&#60;/p&#62;
                @else
                    &#60;p class="minor-details"&#62;Created on {{ $company-&#62;created_at-&#62;format('jS F Y') }}&#60;/p&#62;
                @endif
            &#60;/div&#62;
        &#60;/div&#62;
    &#60;/x-company-list-item&#62;
@endforeach