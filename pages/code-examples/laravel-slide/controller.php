use App\Models\Company;

class CompanyController extends Controller
{
    public function index() 
    { 
        $companies = Company::latest('updated_at')->paginate(10);

        return view('companies.index', compact('companies'));
    }
}