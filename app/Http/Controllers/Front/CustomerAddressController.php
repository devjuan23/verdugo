<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Shop\Addresses\Requests\CreateAddressRequest;
use App\Shop\Addresses\Requests\UpdateAddressRequest;
use App\Shop\Addresses\Repositories\AddressRepository;
use App\Shop\Cities\Repositories\Interfaces\CityRepositoryInterface;
use App\Shop\Addresses\Repositories\Interfaces\AddressRepositoryInterface;
use App\Shop\Countries\Repositories\Interfaces\CountryRepositoryInterface;
use App\Shop\Provinces\Repositories\Interfaces\ProvinceRepositoryInterface;

class CustomerAddressController extends Controller
{
    /**
     * @var AddressRepositoryInterface
     */
    private $addressRepo;

    /**
     * @var CountryRepositoryInterface
     */
    private $countryRepo;

    /**
     * @var CityRepositoryInterface
     */
    private $cityRepo;

    /**
     * @var ProvinceRepositoryInterface
     */
    private $provinceRepo;


    /**
     * @param AddressRepositoryInterface  $addressRepository
     * @param CountryRepositoryInterface  $countryRepository
     * @param CityRepositoryInterface     $cityRepository
     * @param ProvinceRepositoryInterface $provinceRepository
     */
    public function __construct(
        AddressRepositoryInterface $addressRepository,
        CountryRepositoryInterface $countryRepository,
        CityRepositoryInterface $cityRepository,
        ProvinceRepositoryInterface $provinceRepository
    ) {
        $this->addressRepo = $addressRepository;
        $this->countryRepo = $countryRepository;
        $this->provinceRepo = $provinceRepository;
        $this->cityRepo = $cityRepository;
    }

    /**
     * @return \Illuminate\Http\RedirectResponse
     */
    public function index()
    {

        return redirect()->route('accounts', ['tab' => 'address']);
    }

    /**
     * @param  $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        $customer = auth()->user();

        return view('front.customers.addresses.create', [
            'customer' => $customer,
            'countries' => $this->countryRepo->listCountries(),
            'cities' => $this->cityRepo->listCities(),
            'provinces' => $this->provinceRepo->listProvinces()
        ]);
    }

    /**
     * @param CreateAddressRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(CreateAddressRequest $request)
    {
        $request['customer_id'] = auth()->user()->id;

        $this->addressRepo->createAddress($request->except('_token', '_method'));

        return redirect()->route('accounts', ['tab' => 'address'])
            ->with('message', 'Creación de dirección exitosa');
    }

    /**
     * @param $addressId
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit($customerId, $addressId)
    {
        $countries = $this->countryRepo->listCountries();

        $address = $this->addressRepo->findCustomerAddressById($addressId, auth()->user());

        return view('front.customers.addresses.edit', [
            'customer' => auth()->user(),
            'address' => $address,
            'countries' => $countries,
            'cities' => $this->cityRepo->listCities(),
            'provinces' => $this->provinceRepo->listProvinces()
        ]);
    }

    /**
     * @param UpdateAddressRequest $request
     * @param $addressId
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(UpdateAddressRequest $request, $customerId, $addressId)
    {
        $address = $this->addressRepo->findCustomerAddressById($addressId, auth()->user());

        $request = $request->except('_token', '_method');
        $request['customer_id'] = auth()->user()->id;

        $addressRepo = new AddressRepository($address);
        $addressRepo->updateAddress($request);

        return redirect()->route('accounts', ['tab' => 'address'])
            ->with('message', 'Actualización de dirección exitosa');
    }

    /**
     * @param $addressId
     *
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($customerId, $addressId)
    {
        $address = $this->addressRepo->findCustomerAddressById($addressId, auth()->user());

       if ($address->orders()->exists()) {
             $address->status=0;
             $address->save();
       }
       else {
             $address->delete();
       }
        return redirect()->route('accounts', ['tab' => 'address'])
            ->with('message', 'Eliminación de dirección exitosa');
    }
}
