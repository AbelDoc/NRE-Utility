
    /**
     * @file NRE_Vector.tpp
     * @brief Implementation of Utility's API's Container : Vector
     * @author Louis ABEL
     * @date 16/05/2019
     * @copyright CC-BY-NC-SA
     */

     namespace NRE {
         namespace Utility {

             template <class T>
             inline Vector<T>::Vector() : length(0), capacity(1), data(static_cast <T*> (::operator new (sizeof(T)))) {
             }

             template <class T>
             inline Vector<T>::Vector(std::size_t count, T const& value) : length(count), capacity(count), data(static_cast <T*> (::operator new (count * sizeof(T)))) {
                 assign(count, value);
             }

             template <class T>
             inline Vector<T>::Vector(std::size_t count) : length(count), capacity(count), data(new T[count]()) {
             }

             template <class T>
             template <class InputIterator>
             inline Vector<T>::Vector(InputIterator begin, InputIterator end) : length(std::distance(begin, end)), capacity(length), data(static_cast <T*> (::operator new (length * sizeof(T)))) {
                 assign(begin, end);
             }

             template <class T>
             inline Vector<T>::Vector(std::initializer_list<T> init) : length(init.size()), capacity(length), data(static_cast <T*> (::operator new (length * sizeof(T)))) {
                 std::size_t current = 0;
                 for (auto it = init.begin(); it != init.end(); it++) {
                     data[current] = *(new(&data[current]) T (std::move(*it)));
                     current++;
                 }
             }

             template <class T>
             inline Vector<T>::Vector(Vector const& vec) : length(vec.length), capacity(vec.capacity), data(static_cast <T*> (::operator new (capacity * sizeof(T)))) {
                 copy(vec);
             }

             template <class T>
             inline Vector<T>::Vector(Vector && vec) : length(vec.length), capacity(vec.capacity), data(std::move(vec.data)) {
                 vec.length = 0;
                 vec.capacity = 0;
                 vec.data = nullptr;
             }

             template <class T>
             inline Vector<T>::~Vector() {
                 clear();
                 ::operator delete(data);
             }

             template <class T>
             inline T& Vector<T>::get(std::size_t index) {
                 if (index >= length) {
                     throw std::out_of_range("Accessing NRE::Utility::Vector element : " + std::to_string(index) + " while vector length is " + std::to_string(length) + ".");
                 }
                 return data[index];
             }

             template <class T>
             inline T const& Vector<T>::get(std::size_t index) const {
                 if (index >= length) {
                     throw std::out_of_range("Accessing NRE::Utility::Vector element : " + std::to_string(index) + " while vector length is " + std::to_string(length) + ".");
                 }
                 return data[index];
             }

             template <class T>
             inline T* Vector<T>::getData() {
                 return data;
             }

             template <class T>
             inline const T* Vector<T>::getData() const {
                 return data;
             }

             template <class T>
             inline T& Vector<T>::getFront() {
                 return data[0];
             }

             template <class T>
             inline T const& Vector<T>::getFront() const {
                 return data[0];
             }

             template <class T>
             inline T& Vector<T>::getLast() {
                 return data[length - 1];
             }

             template <class T>
             inline T const& Vector<T>::getLast() const {
                 return data[length - 1];
             }

             template <class T>
             inline std::size_t Vector<T>::getSize() const {
                 return length;
             }

             template <class T>
             inline constexpr std::size_t Vector<T>::getMaxSize() const {
                 return std::numeric_limits<std::size_t>::max();
             }

             template <class T>
             inline std::size_t Vector<T>::getCapacity() const {
                 return capacity;
             }

             template <class T>
             inline constexpr bool Vector<T>::isEmpty() const {
                 return length == 0;
             }

             template <class T>
             inline typename Vector<T>::Iterator Vector<T>::begin() {
                 return data;
             }

             template <class T>
             inline typename Vector<T>::ConstIterator Vector<T>::begin() const {
                 return data;
             }

             template <class T>
             inline typename Vector<T>::Iterator Vector<T>::end() {
                 return data + length;
             }

             template <class T>
             inline typename Vector<T>::ConstIterator Vector<T>::end() const {
                 return data + length;
             }

             template <class T>
             inline typename Vector<T>::ReverseIterator Vector<T>::rbegin() {
                 return ReverseIterator(data + length);
             }

             template <class T>
             inline typename Vector<T>::ConstReverseIterator Vector<T>::rbegin() const {
                 return ConstReverseIterator(data + length);
             }

             template <class T>
             inline typename Vector<T>::ReverseIterator Vector<T>::rend() {
                 return ReverseIterator(data);
             }

             template <class T>
             inline typename Vector<T>::ConstReverseIterator Vector<T>::rend() const {
                 return ConstReverseIterator(data);
             }

             template <class T>
             inline void Vector<T>::assign(std::size_t count, T const& value) {
                 clear();
                 for (std::size_t i = 0; i < count; i++) {
                     data[i] = *(new(&data[i]) T (value));
                 }
             }

             template <class T>
             template <class InputIterator>
             inline void Vector<T>::assign(InputIterator begin, InputIterator end) {
                 clear();
                 std::size_t current = 0;
                 for ( ; begin != end; begin++) {
                     data[current] = *(new(&data[current]) T (*(begin)));
                     current++;
                 }
                 length = current;
             }

             template <class T>
             inline void Vector<T>::reserve(std::size_t size) {
                 if (capacity < size) {
                     reallocate(size);
                 }
             }

             template <class T>
             inline typename Vector<T>::Iterator Vector<T>::insert(ConstIterator start, T const& value) {
                 std::size_t index = start - ConstIterator(data);
                 if (capacity < length + 1) {
                     reallocate();
                 }
                 shift(index, 1);
                 length++;
                 data[index] = *(new(&data[index]) T (value));
                 return Iterator(data + index);
             }

             template <class T>
             inline typename Vector<T>::Iterator Vector<T>::insert(ConstIterator start, std::size_t count, T const& value) {
                 std::size_t index = start - ConstIterator(data);
                 if (capacity < length + count) {
                     reserveWithGrowFactor(length + count);
                 }
                 shift(index, count);
                 for (std::size_t it = index; it != index + count; it++) {
                     data[it] = *(new(&data[it]) T (value));
                 }
                 length += count;
                 return Iterator(data + index);
             }

             template <class T>
             template <class InputIterator>
             inline typename Vector<T>::Iterator Vector<T>::insert(ConstIterator start, InputIterator begin, InputIterator end) {
                 std::size_t count = std::distance(begin, end);
                 std::size_t index = start - ConstIterator(data);
                 if (capacity < length + count) {
                     reserveWithGrowFactor(length + count);
                 }
                 shift(index, count);
                 for ( ; begin != end; begin++) {
                     data[index] = *(new(&data[index]) T (*begin));
                     index++;
                 }
                 length += count;
                 return Iterator(data + index);
             }

             template <class T>
             inline typename Vector<T>::Iterator Vector<T>::insert(ConstIterator start, std::initializer_list<T> list) {
                 std::size_t count = list.size();
                     std::size_t index = start - ConstIterator(data);
                 if (capacity < length + count) {
                     reserveWithGrowFactor(length + count);
                 }
                 shift(index, count);
                 for (auto it = list.begin(); it != list.end(); it++) {
                     data[index] = *(new(&data[index]) T (std::move(*it)));
                     index++;
                 }
                 length += count;
                 return Iterator(data + index);
             }

             template <class T>
             template <class ... Args>
             inline typename Vector<T>::Iterator Vector<T>::emplace(ConstIterator start, Args && ... args) {
                 std::size_t index = start - ConstIterator(data);
                 if (capacity < length + 1) {
                     reallocate();
                 }
                 shift(index, 1);
                 data[index] = *(new(&data[index]) T (std::forward<Args>(args)...));
                 return Iterator(data + index);
             }

             template <class T>
             inline typename Vector<T>::Iterator Vector<T>::erase(ConstIterator pos) {
                 (*pos).~T();
                 shiftBack(pos - ConstIterator(data), 1);
                 length--;
                 return Iterator(pos++);
             }

             template <class T>
             inline typename Vector<T>::Iterator Vector<T>::erase(ConstIterator begin, ConstIterator end) {
                 std::size_t count = std::distance(begin, end);
                 for (auto it = begin; it != end; it++) {
                     (*it).~T();
                 }
                 shiftBack(begin - ConstIterator(data), count);
                 length -= count;
                 return Iterator(end);
             }

             template <class T>
             inline void Vector<T>::pushBack(T const& value) {
                 if (capacity < length + 1) {
                     reallocate();
                 }
                 data[length] = *(new(&data[length]) T (value));
                 length++;
             }

             template <class T>
             inline void Vector<T>::pushBack(T && value) {
                 if (capacity < length + 1) {
                     reallocate();
                 }
                 data[length] = *(new(&data[length]) T (value));
                 length++;
             }

             template <class T>
             template <class ... Args>
             inline void Vector<T>::emplaceBack(Args && ... args) {
                 if (capacity < length + 1) {
                     reallocate();
                 }
                 data[length] = *(new(&data[length]) T (std::forward<Args>(args)...));
                 length++;
             }


             template <class T>
             inline void Vector<T>::resize(std::size_t count) {
                 resize(count, T());
             }

             template <class T>
             inline void Vector<T>::resize(std::size_t count, T const& value) {
                 if (capacity < count) {
                     reallocate(count);
                     for (std::size_t index = length; index != count; index++) {
                         data[index] = *(new(&data[index]) T (value));
                     }
                     length = count;
                 }
             }

             template <class T>
             inline void Vector<T>::swap(Vector& vec) {
                 using namespace std;
                 swap(length, vec.length);
                 swap(capacity, vec.capacity);
                 swap(data, vec.data);
             }

             template <class T>
             inline T& Vector<T>::operator[](std::size_t index) {
                 return data[index];
             }

             template <class T>
             inline T const& Vector<T>::operator[](std::size_t index) const {
                 return data[index];
             }

             template <class T>
             inline Vector<T>& Vector<T>::operator =(Vector const& vec) {
                 if (vec.data != data) {
                     clear();
                     length = vec.length;
                     capacity = vec.capacity;
                     data = static_cast <T*> (::operator new(capacity * sizeof(T)));

                     copy(vec);
                 }
                 return *this;
             }

             template <class T>
             inline Vector<T>& Vector<T>::operator =(Vector && vec) {
                 if (vec.data != data) {
                     clear();
                     length = vec.length;
                     capacity = vec.capacity;
                     data = std::move(vec.data);

                     vec.length = 0;
                     vec.capacity = 0;
                     vec.data = nullptr;
                 }
                 return *this;
             }

             template <class T>
             inline bool Vector<T>::operator !=(Vector const& vec) const {
                 return !(*this == vec);
             }

             template <class T>
             inline void Vector<T>::reallocate() {
                 reallocate((capacity == 1) ? (BASE_ALLOCATION_SIZE)
                                            : (static_cast <std::size_t> (static_cast <float> (capacity) * GROW_FACTOR)));
             }

             template <class T>
             inline void Vector<T>::reserveWithGrowFactor(std::size_t size) {
                 std::size_t newSize = (capacity == 1) ? (BASE_ALLOCATION_SIZE)
                                                       : (static_cast <std::size_t> (static_cast <float> (capacity) * GROW_FACTOR));
                 while (newSize < size) {
                     newSize = static_cast <std::size_t> (static_cast <float> (newSize) * GROW_FACTOR);
                 }
                 reallocate(newSize);
             }

         }
     }
